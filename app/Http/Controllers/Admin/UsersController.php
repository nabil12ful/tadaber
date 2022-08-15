<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function index(){
        $users = DB::table('users')->get();
        return view('admin.users.manage', compact('users'));
    }

    public function add()
    {
        return view('admin.users.add');
    }

    public function store(Request $request){
        $valid = Validator::make($request->all(), [
            'name' =>  'required|string',
            'count_family' =>  'required|numeric',
            'address' =>  'required|string',
            'phone' =>  'required|numeric|unique:country,name',
        ]);
        if($valid->fails()){
            return back()->withInput()->withErrors($valid);
        }else{
            DB::table('users')->insert([
                'name'         =>  $request->name,
                'count_family'   =>  $request->count_family,
                'phone'    => $request->phone,
                'address'    => $request->address,
            ]);
            return redirect()->back()->with('message', 'تم اضافة العميل بنجاح.');
        }
    }

    public function edit($id){
        $users = User::find($id);
        return view('admin.users.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $valid = Validator::make($request->all(), [
            'name' =>  'required|string',
            'count_family' =>  'required|numeric',
            'address' =>  'required|string',
            'phone' =>  'required|numeric|unique:country,name',
        ]);
        if($valid->fails()){
            return back()->withInput()->withErrors($valid);
        }else{
            $users = User::find($id);
            
            $users->name         =   $request->input('name');
            $users->phone         =   $request->input('phone');
            $users->address         =   $request->input('address');
            $users->count_family       =   $request->input('count_family');
            $users->update();

            return back()->with('message', 'تم تحديث البيانات بنجاح.');
        }
    }

    public function show($id)
    {
        $users = User::find($id);
        return view('admin.users.view', compact('users'));
    }

    public function delete($id)
    {
        $users = User::find($id);

        $users->delete();
        return redirect()->route('admin.users.manage')->with('message', 'تم حذف العميل بنجاح.');
    }
}
