<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function home()
    {
        $country = DB::table('country')->get();
        return view('home', compact('country'));
    }
    public function worker()
    {
        $items = DB::table('worker')
                    ->join('country', 'country.id', '=', 'worker.nationality')
                    ->select('country.name As nation', 'worker.*')
                    ->where('is_basy', '=', '0')
                    ->paginate();
        return view('worker', compact('items'));
    }

    public function country()
    {
        $items = DB::table('country')->paginate();
        return view('countrie', compact('items'));
    }

    public function order()
    {
        return view('trackOrder');
    }

    public function track(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'order_code'    => 'required|string|exists:order,order_code'
        ]);
        if($valid->fails()){
            return back()->withInput()->withErrors($valid);
        }else{
            $order = DB::table('order')->where('order_code', '=', $request->order_code)->get();
            $result = $order->order_code;
            redirect()->route('result')->with('status', 'طلبك '.$result);
        }
    }

    public function result()
    {

        return view('result');
    }

    public function move()
    {
        $items = DB::table('move')
                    ->join('country', 'country.id', '=', 'move.nationality')
                    ->select('country.name As nation', 'move.*')
                    ->where('is_basy', '=', '0')
                    ->paginate();
        return view('allsponsorcvs', compact('items'));
    }
}
