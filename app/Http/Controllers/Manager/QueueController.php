<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use App\Status;

class QueueController extends Controller
{
    public function addQueue($id){

        $jobStatus = Job::find($id)->status;
        $jobStatus->status = "Đang đợi";
        $jobStatus->save();
        
        return redirect()->back();
    }

    public function prioritizeQueue($id){

        $jobStatus = Job::find($id)->status;
        $jobStatus->status = "Ưu tiên";
        $jobStatus->save();
        
        return redirect()->back();

    }
}
