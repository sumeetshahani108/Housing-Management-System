<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Create_apt extends Model
{
    public $table = "apartment_data";

    public function owner(){
        return $this->belongsTo('App\Owner');
    }
}

