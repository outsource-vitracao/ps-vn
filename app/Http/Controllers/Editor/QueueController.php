<?php

namespace App\Http\Controllers\Editor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use App\JobStatus;
class QueueController extends Controller
{
    
    public function get(){
        
        $jobStatus = $this->available();

        if(isset($jobStatus)){
            $jobStatus->status = "Đang edit";
            $jobStatus->save();
        }

        return redirect()->route('editor-index');
    }

    public function finish($id){
        
        $jobStatus = JobStatus::where('job_id',$id)->first();
        $jobStatus->status = "Hoàn thành edit";
        $jobStatus->save();

        return redirect()->route('editor-index');
    }

    public function available(){
        $jobStatus = JobStatus::where('status','Ưu tiên')->first();
        if(!isset($jobStatus)){
            $jobStatus = JobStatus::where('status','Đang đợi')->first();
        }
        return $jobStatus;
    }
}
