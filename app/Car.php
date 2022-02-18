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
    ];
}
