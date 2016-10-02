<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticable;

//Authenticable is used when we want the users to log in
class Login extends Model implements Authenticatable
{
    //Authentication in Laravel
     use \Illuminate\Auth\Authenticatable;
     protected $table = 'owner';
}
