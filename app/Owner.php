<?php
//In models we define out business logic .
namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    //define in the model, what is the name of the table
    protected $table = 'owner';

    //if we don't write the timestamp, it gives the error : column not found
    public $timestamps = false;
}
