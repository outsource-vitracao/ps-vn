<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    protected $fillable = [
        'name',
        'time',
        'description'
    ];

    public function job(){
        return $this->hasMany('App/Job');
    }    
    public function order(){
        return $this->hasMany('App/Order');
    }
}
