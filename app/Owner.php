<?php
//In models we define out business logic .
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Owner extends Model implements Authenticatable
{
    //define in the model, what is the name of the table
    use \Illuminate\Auth\Authenticatable;
    protected $table = 'owner';
    protected $primaryKey = 'owner_id';
    //if we don't write the timestamp, it gives the error : column not found
    public $timestamps = false;

    public function getAuthIdentifier(){
        return $this->getKey();
    }

    public function apartment(){
        return $this->hasMany('App\Create_apt');
    }

    public function getAuthPassword(){
      return $this->password;
    }

    public function getReminderEmail(){
        return $this->email;
    }
}
