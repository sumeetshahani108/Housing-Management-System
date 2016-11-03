<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'like';
    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }
    public function apartment()
    {
        return $this->belongsTo('App\Apartment');
    }
}
