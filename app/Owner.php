<?php
//In models we define out business logic .
namespace App;


use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class Owner extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    //define in the model, what is the name of the table
    use Authenticatable,CanResetPassword,  EntrustUserTrait;
    protected $table = 'owner';
    protected $primaryKey = 'owner_id';
    //if we don't write the timestamp, it gives the error : column not found
    public $timestamps = false;

    public function getAuthIdentifier(){
        return $this->getKey();
    }

    public function apartment(){
        return $this->hasMany('Apartment','apt_id');
    }

    public function getAuthPassword(){
      return $this->password;
    }

    public function getReminderEmail(){
        return $this->email;
    }
}
