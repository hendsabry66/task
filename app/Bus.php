<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table ='buses';
    protected $fillable = ['number','from','to'];
}
