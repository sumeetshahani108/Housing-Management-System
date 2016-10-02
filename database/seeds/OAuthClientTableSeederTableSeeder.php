<?php

use Illuminate\Database\Seeder;


// composer require laracasts/testdummy
//use Laracasts\TestDummy\Factory as TestDummy;

class OAuthClientTableSeeder extends Seeder
{
    public function run()
    {
        // Create website client secret
        \App\OAuthClient::create([
           'id'=>'123',
            'secret'=>'abc',
            'name'=>'HTML'
        ]);

        \App\OAuthClient::create([
            'id'=>'456',
            'secret'=>'pqr',
            'name'=>'CSS'
        ]);

        \App\OAuthClient::create([
            'id'=>'789',
            'secret'=>'xyz',
            'name'=>'JS'
        ]);
    }
}
