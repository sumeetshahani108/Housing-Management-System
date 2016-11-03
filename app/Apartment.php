<?php

namespace App;

use App\Owner;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    //add the table which is called up by this modal
    protected $table = 'apartment_data';
    protected $primaryKey = 'apt_id';
    public function owner(){
        return $this->belongsTo('Owner','owner_id');
    }

    public function ratings(){
        return $this->hasMany('App\Ratings');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

}
