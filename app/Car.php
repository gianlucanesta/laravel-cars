<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $fillable = [
        'brand',
        'model',
        'engine_displacement',
        'doors',
        'img',
        'category_id'
    ];

    public function optionals() {
        return $this->belongsToMany('App\Optional');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
