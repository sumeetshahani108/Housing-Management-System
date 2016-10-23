<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $table = 'booking_apts';
    protected $primaryKey = 'booking_id';
    public $timestamps = false;
}
