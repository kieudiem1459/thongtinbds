<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tinbds extends Model
{
    //
    protected $table='tin_bds';

    public function huong(){
        return $this->belongsTo('App\huong','id_huong');
    }

    public function hinhthuc(){
        return $this->belongsTo('App\hinhthuc','id_hinhthuc');
    }
    
}
