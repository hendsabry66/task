<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table ='drivers';
    protected $fillable = ['name','phone','bus_id','address'];

    public function bus()
    {
        return $this->belongsTo('App\Bus','bus_id','id');
    }
}
