<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //


    public $timestamps=false;
    protected $fillable = [
        'manufacture', 'name', 'model','manufacturing_year','seating_capacity',
    ];
}
