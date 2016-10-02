<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash ;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        /*
        \App\User::create([
            'email'=>'sumeet.shahani@ves.ac.in',
            'phone'=>'+91-8767772212',
            'password'=>Hash::make('test123'),
        ]);
        */
        \App\User::create([
            'name'=>'Sumeet Shahani',
            'email'=>'sumeet.shahani@ves.ac.in',
            'password'=> Hash::make('test123'),
        ]);
    }
}