<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinhthuc extends Model
{
    //
    protected $table='hinhthuc';
    public $timestamp = false;


    public function tinbds(){
        return $this->hasMany('App\tinbds','id_hinhthuc');
    }
}
