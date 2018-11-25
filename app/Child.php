<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $table ='children';
    protected $fillable = ['name','bus_id'];

    public function bus()
    {
        return $this->belongsTo('App\Bus','bus_id','id');
    }
}
