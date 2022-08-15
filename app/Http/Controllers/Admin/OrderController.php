<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Worker;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class OrderController extends Controller
{
    public function index(){
        $order = DB::table('order')
                    ->join('users', 'order.user_id', '=', 'users.id')
                    ->join('worker', 'order.worker_id', '=', 'worker.id')
                    ->select("users.name AS name", "worker.name AS worker", 'order.*')
                    ->paginate();
        return view('admin.order.manage', compact('order'));
    }

    public function add()
    {
        $users = DB::table('users')->get();
        $worker = DB::table('worker')->where('is_basy', '=', '0')->get();
        return view('admin.order.add', compact('users', 'worker'));
    }

    public function store(Request $request){
        $valid = Validator::make($request->all(), [
            'user_id' =>  'required|numeric|exists:users,id',
            'worker_id' =>  'required|numeric|exists:worker,id',
        ]);
        if($valid->fails()){
            return back()->withInput()->withErrors($valid);
        }else{
            $orderCode = Str::random(8);

            DB::table('order')->insert([
                'user_id'         =>  $request->user_id,
                'worker_id'   =>  $request->worker_id,
                'order_code'    => $orderCode,
                'status'    => "جديد",
            ]);
            $worker = Worker::find($request->worker_id);
            $worker->is_basy = '1';
            $worker->update();
            return redirect()->back()->with('message', 'تم اضافة العميل بنجاح.');
        }
    }

    public function edit($id){
        $order = Order::find($id);
        $users = DB::table('users')->get();
        $worker = DB::table('worker')->get();
        return view('admin.order.edit', compact('order', 'users', 'worker'));
    }

    public function update(Request $request, $id)
    {
        $valid = Validator::make($request->all(), [
            'user_id' =>  'required|numeric|exists:users,id',
            'worker_id' =>  'required|numeric|exists:worker,id',
            'status'    => 'required|string'
        ]);
        if($valid->fails()){
            return back()->withInput()->withErrors($valid);
        }else{
            $order = Order::find($id);
            $status = $request->status;
            $oldWorker = $order->worker_id;
            $newWorker = $request->worker_id;


            if($status == 'مرفوض')
            {
                $worker = Worker::find($request->woker_id);
                $worker->is_basy = '0';
                $worker->update();
            }

            if($oldWorker == $newWorker)
            {
                $worker_id = $oldWorker;
            }else{
                $worker_id = $newWorker;
                $worker = Worker::find($oldWorker);
                $worker->is_basy = '0';
                $worker->update();
                $worker = Worker::find($newWorker);
                $worker->is_basy = '1';
                $worker->update();
            }

            $order->user_id         =   $request->user_id;
            $order->worker_id         =   $worker_id;
            $order->status         =   $request->input('status');
            $order->update();

            return back()->with('message', 'تم تحديث البيانات بنجاح.');
        }
    }

    public function show($id)
    {
        $order = Order::find($id);
        return view('admin.order.view', compact('order'));
    }

    public function delete($id)
    {
        $order = Order::find($id);

        $order->delete();
        return redirect()->route('admin.order.manage')->with('message', 'تم حذف العميل بنجاح.');
    }
}

