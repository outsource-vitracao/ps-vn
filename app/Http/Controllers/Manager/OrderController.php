<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Job;

class OrderController extends Controller
{   

    public function create($job_id){
        return view('manager.create-order',compact('job_id'));
    }

    public function store(Request $request){

        $order = new Order($request->all());
        $order->save();
        return redirect()->route('manager-show-job',$order->job_id);

    }

    public function destroy($id){

        $order = Order::find($id);
        $job_id = $order->job_id;
        $order->delete();

        return redirect()->route('manager-show-job',$order->job_id);
        
    }

    public function edit($id){

        $order = Order::find($id);
        return view('manager.edit-order',compact('order'));

    }

    public function update(Request $request){

        $order = Order::find($request->id)->update($request->all());
        
        return redirect()->route('manager-show-job',$request->job_id);
        
    }
}
