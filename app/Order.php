<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    protected $fillable = [
        'job_id',
        'style',
        'total',
        'note'
    ];
    public function job(){
        return $this->belongsTo('App/Job');
    }

    public function style(){
        return $this->hasOne('App\Style');
    }
}