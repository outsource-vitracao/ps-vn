<?php

namespace App\Http\Controllers\QualityAssurance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use App\JobStatus;

class QueueController extends Controller
{
    
    public function get($id){

        $jobStatus = JobStatus::where('job_id',$id)->first();
        $jobStatus->status = "Đang kiểm tra";
        $jobStatus->save();

        return redirect()->route('qa-show-job',$id);
    }

    public function back($id){
        $jobStatus = JobStatus::where('job_id',$id)->first();
        $jobStatus->status = "Trả về Editor";
        $jobStatus->save();

        return redirect()->route('qa-show-job',$id);
    }
    public function finish($id){

        $jobStatus = JobStatus::where('job_id',$id)->first();
        $jobStatus->status = "Hoàn thành kiểm tra";
        $jobStatus->save();

        return redirect()->route('qa-index');
    }
}
