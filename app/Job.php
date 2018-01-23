<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "jobs";

    protected $fillable = [
        'name',
        'client',
        'total',
        'style',
        'linkdownload',
        'note',
    ];

    public function order(){
        return $this->hasOne('App\Order');
    }

    public function status(){
        return $this->hasOne('App\JobStatus');
    }
}