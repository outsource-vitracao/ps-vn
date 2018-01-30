<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request){

        $comment = new Comment;
        $comment->job_id = $request->job_id;
        $comment->user = "Manager";
        $comment->comment = $request->comment;
        $comment->save();

        return redirect()->back();
    }
}
