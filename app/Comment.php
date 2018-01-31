<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{   
    protected $fillable = [
        'job_id',
        'user',
        'comment',
    ];

    public function job(){
        return $this->belongsTo('App\Job');
    }
}
