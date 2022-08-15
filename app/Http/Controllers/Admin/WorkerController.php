<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Worker;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
// use DateTimeInterface

class WorkerController extends Controller
{
    public function index(){
        $worker = DB::table('worker')
                    ->join('country', 'country.id', '=', 'worker.nationality')
                    ->select('country.name As nation', 'worker.*')
                    ->paginate();
        return view('admin.worker.manage', compact('worker'));
    }

    public function add()
    {
        $country = DB::table('country')->get();
        return view('admin.worker.add', compact('country'));
    }

    // public function validateDate($value)
    // {
    //     if($value instanceof DateTimeInterFace)
    //     {
    //         return true;
    //     }

    //     try {
    //         if((!is_string($value) && !is_numeric($value)) || strtotime($value) === false)
    //         {
    //             return false;
    //         }
    //     }catch(Exception $e)
    //     {
    //         return false;
    //     }

    //     $date = date_parse($value);

    //     return checkdate($date['month'], $date['day'], $date['year']);
    // }

    public function store(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:3048',
            'name' =>  'required|string',
            'nationality' =>  'required|integer|max:191|exists:country,id',
            'occupation' =>  'required|string',
            'religion' =>  'required|string',
            'phone' =>  'required|string|unique:worker,phone',
            'experience' =>  'required|string',
            'marital_status' =>  'required|string',
            'birthday' =>  'required|date',
            'passport_number' =>  'required|numeric',
            'pn_expire_date' =>  'required|date',
            // 'salary' =>  'required|string',
            // 'price' =>  'required|string',
        ]);
        if($valid->fails()){
            return back()->withInput()->withErrors($valid);
        }else{
            if($request->hasFile('image')){
                $path = 'uploads/worker/';
                $file = $request->file('image');
                $name = $request->input('name'). '.';
                $ext = $file->extension();
                $name = $name . $ext;
                $file->move($path, $name);
                $request->image = $name;
            }
            $country = Country::find($request->nationality);
            $country->worker = $country->worker + 1;
            $country->update();

            DB::table('worker')->insert([
                'name'         =>  $request->name,
                'image'   =>  $request->image,
                'nationality'   =>  $request->nationality,
                'occupation'   =>  $request->occupation,
                'religion'   =>  $request->religion,
                'phone'   =>  $request->phone,
                'experience'   =>  $request->experience,
                'marital_status'   =>  $request->marital_status,
                'birthday'   =>  $request->birthday,
                'passport_number'   =>  $request->passport_number,
                'pn_expire_date'   =>  $request->pn_expire_date,
                // 'salary'   =>  $request->salary,
                // 'price'   =>  $request->price,
            ]);
            return redirect()->back()->with('message', 'تم اضافة العمالة بنجاح.');
        }
    }

    public function edit($id)
    {
        $worker = Worker::find($id);
        $country = DB::table('country')->get();
        return view('admin.worker.edit', compact('worker', 'country'));
    }

    public function update(Request $request, $id)
    {
        $valid = Validator::make($request->all(), [
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:3048',
            'name' =>  'required|string',
            'nationality' =>  'required|integer|max:191|exists:country,id',
            'occupation' =>  'required|string',
            'religion' =>  'required|string',
            'phone' =>  'required|string|unique:worker,phone,'.$id,
            'experience' =>  'required|string',
            'marital_status' =>  'required|string',
            'experience' =>  'required|string',
            'marital_status' =>  'required|string',
            'birthday' =>  'required|date',
            'passport_number' =>  'required|numeric',
            'pn_expire_date' =>  'required|date',
            // 'salary' =>  'required|string',
            // 'price' =>  'required|string',
        ]);
        if($valid->fails()){
            return back()->withInput()->withErrors($valid);
        }else{
            $worker = Worker::find($id);
            $image = $worker->image;
            // Image
            if(!empty($request->image)){
                if(File::exists('uploads/worker/' . $image)){
                    File::delete('uploads/worker/' . $image);
                }
                if($request->hasFile('image')){
                    $path = 'uploads/worker/';
                    $file = $request->file('image');
                    $name = $request->input('name') . '.';
                    $ext  = $file->extension();
                    $name = $name . $ext;
                    $file->move($path, $name);
                    $request->image = $name;
                }
                $image = $request->image;
            }

            $oldCountry = $worker->nationality;
            $newCountry = $request->input('nationality');
            if($oldCountry == $newCountry){
                $worker->nationality = $request->input('nationality');
            }else{
                $old = Country::find($oldCountry);
                $old->worker -= 1;
                $old->update();
                $country = Country::find($request->input('nationality'));
                $country->worker += 1;
                $country->update();
                $worker->nationality = $request->input('nationality');
            }
            $worker->name         =   $request->input('name');
            $worker->occupation         =   $request->input('occupation');
            $worker->religion         =   $request->input('religion');
            $worker->phone         =   $request->input('phone');
            $worker->experience         =   $request->input('experience');
            $worker->marital_status         =   $request->input('marital_status');
            $worker->birthday         =   $request->input('marital_status');
            $worker->passport_number         =   $request->input('marital_status');
            $worker->pn_expire_date         =   $request->input('marital_status');
            // $worker->salary         =   $request->input('salary');
            // $worker->price         =   $request->input('price');
            $worker->image         =   $image;
            $worker->update();

            return back()->with('message', 'تم تحديث البيانات بنجاح.');
        }
    }

    public function show($id)
    {
        $worker = Worker::find($id);
        $country = DB::table('country')->get();
        return view('admin.worker.view', compact('worker', 'country'));
    }

    public function delete($id)
    {
        $worker = Worker::find($id);
        // update Country worker
        $country = Country::find($worker->nationality);
        $country->worker -= 1;
        $country->update();

        // get image
        $image = $worker->image;
        // Delete Front NID Image
        if(File::exists('uploads/worker/' . $image)){
            File::delete('uploads/worker/' . $image);
        }
        $worker->delete();
        return redirect()->route('admin.worker.manage')->with('message', 'تم حذف العامل بنجاح.');
    }

    public function search(Request $request)
    {
        $string = $request->q;
        $worker = DB::table('worker')
                    ->join('country', 'country.id', '=', 'worker.nationality')
                    ->select('country.name As nation', 'worker.*')
                    ->where('worker.name', 'like', '%'.$string.'%')
                    ->orWhere('worker.occupation', 'like', '%'.$string.'%')
                    ->orWhere('worker.religion', 'like', '%'.$string.'%')
                    ->orWhere('worker.phone', 'like', '%'.$string.'%')
                    ->orWhere('worker.experience', 'like', '%'.$string.'%')
                    ->orWhere('worker.marital_status', 'like', '%'.$string.'%')
                    ->orWhere('worker.passport_number', 'like', '%'.$string.'%')
                    ->orWhere('country.name', 'like', '%'.$string.'%')
                    ->paginate();
        return view('admin.worker.manage', compact('worker'));
    }
}
