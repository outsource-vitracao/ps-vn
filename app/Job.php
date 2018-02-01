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
        'style_id',
        'linkdownload',
        'note',
    ];

    public function style(){
        return $this->belongsTo('App\Style');
    }
    public function order(){
        return $this->hasOne('App\Order');
    }
    public function comment(){
        return $this->hasMany('App\Comment');
    }
    public function status(){
        return $this->hasOne('App\JobStatus');
    }
}
