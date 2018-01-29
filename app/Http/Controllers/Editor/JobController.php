<?php

namespace App\Http\Controllers\Editor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use App\JobStatus;
use App\Order;

class JobController extends Controller
{
    
    public function index(){
        
        $jobStatus = JobStatus::where('status','Đang edit')->get();

        if($jobStatus->first() == NULL){
            return view('editor.index');
        }
        
        //Cho danh sách job_id 
        $jobs_id = array();
        foreach($jobStatus as $status){
            $jobs_id[] = $status->job_id;
        }
        
        $jobs = Job::find($jobs_id);
        
        return view('editor.index',compact('jobs'));
    }

    public function show($id){
        
        $job = Job::find($id);

        return view('editor.detail',compact('job'));
    }
    

}
