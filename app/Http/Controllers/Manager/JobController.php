<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use App\JobStatus;
use App\Order;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::all();
        return view('manager.index',compact('jobs'));        
    }

    public function create(){
        return view('manager.create-job');
    }

    public function store(Request $request){

        $job = new Job($request->all());
        $job->save();
        
        $jobStatus = new JobStatus;
        $jobStatus->job_id = $job->id;
        $jobStatus->status = 'Chờ';
        $jobStatus->save();

        return redirect()->route('manager-show-job',$job->id);

    }

    public function show($id){

        $job = Job::find($id);
        return view('manager.show',compact('job'));
    }

    public function edit($id){
         
        $job = Job::find($id);

        return view('manager.edit-job',compact('job'));
    }

    public function update(Request $request){

        $job = Job::find($request->id)->update($request->all());
        return redirect()->route('manager-show-job',$request->id);
    }

    public function destroy($id){

        $job = Job::find($id);
        $job->delete();
        
        if($job->order != NULL)
            $job->order->delete();

        return redirect()->route('manager-index');
    }




}
