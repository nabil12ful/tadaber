<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Move;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class MoveController extends Controller
{
    public function index(){
        $move = DB::table('move')
                    ->join('country', 'country.id', '=', 'move.nationality')
                    ->select('country.name As nation', 'move.*')
                    ->paginate();
        return view('admin.move.manage', compact('move'));
    }

    public function add()
    {
        $country = DB::table('country')->get();
        return view('admin.move.add', compact('country'));
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
            'phone' =>  'required|string|unique:move,phone',
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
                $path = 'uploads/move/';
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

            DB::table('move')->insert([
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
        $move = Move::find($id);
        $country = DB::table('country')->get();
        return view('admin.move.edit', compact('move', 'country'));
    }

    public function update(Request $request, $id)
    {
        $valid = Validator::make($request->all(), [
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:3048',
            'name' =>  'required|string',
            'nationality' =>  'required|integer|max:191|exists:country,id',
            'occupation' =>  'required|string',
            'religion' =>  'required|string',
            'phone' =>  'required|string|unique:move,phone,'.$id,
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
            $move = Move::find($id);
            $image = $move->image;
            // Image
            if(!empty($request->image)){
                if(File::exists('uploads/move/' . $image)){
                    File::delete('uploads/move/' . $image);
                }
                if($request->hasFile('image')){
                    $path = 'uploads/move/';
                    $file = $request->file('image');
                    $name = $request->input('name') . '.';
                    $ext  = $file->extension();
                    $name = $name . $ext;
                    $file->move($path, $name);
                    $request->image = $name;
                }
                $image = $request->image;
            }

            $oldCountry = $move->nationality;
            $newCountry = $request->input('nationality');
            if($oldCountry == $newCountry){
                $move->nationality = $request->input('nationality');
            }else{
                $old = Country::find($oldCountry);
                $old->worker -= 1;
                $old->update();
                $country = Country::find($request->input('nationality'));
                $country->worker += 1;
                $country->update();
                $move->nationality = $request->input('nationality');
            }
            $move->name         =   $request->input('name');
            $move->occupation         =   $request->input('occupation');
            $move->religion         =   $request->input('religion');
            $move->phone         =   $request->input('phone');
            $move->experience         =   $request->input('experience');
            $move->marital_status         =   $request->input('marital_status');
            $move->birthday         =   $request->input('birthday');
            $move->passport_number         =   $request->input('passport_number');
            $move->pn_expire_date         =   $request->input('pn_expire_date');
            // $move->salary         =   $request->input('salary');
            // $move->price         =   $request->input('price');
            $move->image         =   $image;
            $move->update();

            return back()->with('message', 'تم تحديث البيانات بنجاح.');
        }
    }

    public function show($id)
    {
        $move = Move::find($id);
        $country = DB::table('country')->get();
        return view('admin.move.view', compact('move', 'country'));
    }

    public function delete($id)
    {
        $move = Move::find($id);
        // update Country move
        $country = Country::find($move->nationality);
        $country->worker -= 1;
        $country->update();

        // get image
        $image = $move->image;
        // Delete Front NID Image
        if(File::exists('uploads/move/' . $image)){
            File::delete('uploads/move/' . $image);
        }
        $move->delete();
        return redirect()->route('admin.move.manage')->with('message', 'تم حذف العامل بنجاح.');
    }

    public function search(Request $request)
    {
        $string = $request->q;
        $move = DB::table('move')
                    ->join('country', 'country.id', '=', 'move.nationality')
                    ->select('country.name As nation', 'move.*')
                    ->where('move.name', 'like', '%'.$string.'%')
                    ->orWhere('move.occupation', 'like', '%'.$string.'%')
                    ->orWhere('move.religion', 'like', '%'.$string.'%')
                    ->orWhere('move.phone', 'like', '%'.$string.'%')
                    ->orWhere('move.experience', 'like', '%'.$string.'%')
                    ->orWhere('move.marital_status', 'like', '%'.$string.'%')
                    ->orWhere('move.passport_number', 'like', '%'.$string.'%')
                    ->orWhere('country.name', 'like', '%'.$string.'%')
                    ->paginate();
        return view('admin.move.manage', compact('move'));
    }
}

