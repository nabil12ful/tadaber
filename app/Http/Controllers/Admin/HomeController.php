<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index(){
        $worker = DB::table('worker')->count();
        $country = DB::table('country')->count();
        $users = DB::table('users')->count();
        $work = DB::table('worker')->limit(5)->latest()->get();
        $cou = DB::table('country')->limit(5)->latest()->get();
        return view('admin.home', compact('worker', 'country', 'work', 'cou', 'users'));
    }
}
