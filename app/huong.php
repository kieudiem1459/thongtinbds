<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class huong extends Model
{
    //
    protected $table='huong';
    public $timestamps = false;

    public function tinbds(){
        return $this->hasMany('App\tinbds','id_huong');
    }
}
