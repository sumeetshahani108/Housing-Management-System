<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    //
    protected $table = 'ratings';
    protected $primaryKey = 'rating_id';
    public $timestamps = false;
}
