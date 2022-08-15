<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    public function index(){
        $country = DB::table('country')->get();
        return view('admin.country.manage', compact('country'));
    }

    public function add()
    {
        return view('admin.country.add');
    }

    public function store(Request $request){
        $valid = Validator::make($request->all(), [
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' =>  'required|string|unique:country,name',
            'period' =>  'required|numeric',
        ]);
        if($valid->fails()){
            return back()->withInput()->withErrors($valid);
        }else{
            if($request->hasFile('logo')){
                $path = 'uploads/country/';
                $file = $request->file('logo');
                $name = $request->input('name'). '.';
                $ext = $file->extension();
                $name = $name . $ext;
                $file->move($path, $name);
                $request->logo = $name;
            }
            DB::table('country')->insert([
                'name'         =>  $request->name,
                'logo'   =>  $request->logo,
                'period'    => $request->period
            ]);
            return redirect()->back()->with('message', 'تم اضافة الجنسية بنجاح.');
        }
    }

    public function edit($id){
        $country = Country::find($id);
        return view('admin.country.edit', compact('country'));
    }

    public function update(Request $request, $id)
    {
        $valid = Validator::make($request->all(), [
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:4048',
            'name' =>  'required|string|unique:country,name,'.$id,
            'period' =>  'required|numeric',
        ]);
        if($valid->fails()){
            return back()->withInput()->withErrors($valid);
        }else{
            $country = Country::find($id);
            $logo = $country->logo;
            // Image 
            if(!empty($request->logo)){
                if(File::exists('uploads/country/' . $logo)){
                    File::delete('uploads/country/' . $logo);
                }
                if($request->hasFile('logo')){
                    $path = 'uploads/country/';
                    $file = $request->file('logo');
                    $name = $request->input('name') . '.';
                    $ext  = $file->extension();
                    $name = $name . $ext;
                    $file->move($path, $name);
                    $request->logo = $name;
                }
                $logo = $request->logo;
            }
            $country->name         =   $request->input('name');
            $country->logo         =   $logo;
            $country->period       =   $request->input('period');
            $country->update();

            return back()->with('message', 'تم تحديث البيانات بنجاح.');
        }
    }

    public function delete($id)
    {
        $country = Country::find($id);

        $logo = $country->logo;
        // Delete Front NID Image
        if(File::exists('uploads/country/' . $logo)){
            File::delete('uploads/country/' . $logo);
        }
        $country->delete();
        return redirect()->route('admin.country.manage')->with('message', 'تم حذف الدولة بنجاح.');
    }
}
