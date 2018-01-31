<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use App\JobStatus;

class QueueController extends Controller
{
    public function add($id){

        $jobStatus = Job::find($id)->status;
        $jobStatus->status = "Đang đợi";
        $jobStatus->save();
        
        return redirect()->back();
    }

    public function prioritize($id){

        $jobStatus = Job::find($id)->status;
        $jobStatus->status = "Ưu tiên";
        $jobStatus->save();
        
        return redirect()->back();

    }

    public function public($id){

        $jobStatus = Job::find($id)->status;
        $jobStatus->status = "Công khai";
        $jobStatus->save();
        
        return redirect()->back();

    }


    public function return($id){

        $jobStatus = Job::find($id)->status;
        $jobStatus->status = "Đang edit";
        $jobStatus->save();
        
        return redirect()->back();
    }

    public function finish($id){

        $jobStatus = Job::find($id)->status;
        $jobStatus->status = "Bàn giao";
        $jobStatus->save();

        return redirect()->back();
    }
}
