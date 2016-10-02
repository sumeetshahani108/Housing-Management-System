<?php


use Illuminate\Support\Facades\Mail ;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$api = app('Dingo\Api\Routing\Router');


Route::get('/signup',function(){
    return view('owner.sign');
});

//post request for sign-up
Route::post('/home',[
    'uses' => 'OwnerController@signUpOwner',
    'as' => 'signup.owner'
]);


//get request for sign-in
Route::get('/home',[
    'uses' => ''
]);

Route::get('/index',function(){
  return view('index');
});

Route::get('/get',[
    'uses' => 'SearchController@search',
    'as' => 'test'
]);


Route::get('/home','SearchController@viewSearchFilter');

$api->version('v1', function ($api) {
    $api->post('oauth/access_token', function() {
        return Authorizer::issueAccessToken();
    });
});

/*
$api->version('v1',function($api){
    $api->get('users/{user_id}/roles/{role_name}','App\Http\Controllers\HomeController@attachUserRole');

    $api->get('users/{user_id}/roles','App\Http\Controllers\HomeController@getUserId');

    $api->post('roles/permission/add','App\Http\Controllers\HomeController@attachPermission');

    $api->get('role/{role_name}/permissions','App\Http\Controllers\HomeController@getPermissions');

    $api->post('authenticate','App\Http\Controllers\Auth\AuthController@authenticate');

    //$api->get('users','App\Http\Controllers\Auth\AuthController@index');
    //$api->get('user','App\Http\Controllers\Auth\AuthController@show');
});
*/
// Middleware for Authentication
//Methods inside have to go through authentication

$api->version('v1',['middleware' => 'api.auth'],function($api){
    //$api->get('users','App\Http\Controllers\Auth\AuthController@index');

    //$api->get('user','App\Http\Controllers\Auth\AuthController@show');

    //route to refresh the token
    //very important
    //$api->get('token','App\Http\Controllers\Auth\AuthController@getToken');

    //$api->post('delete','App\Http\Controllers\Auth\AuthController@deleteUser');
    $api->post('/signUpOwner',[
      'uses' => 'OwnerController@signUpOwner',
      'as'=> 'Owner'
    ]);

    $api->post('/signIn',[
      'uses' => 'LoginController@login',
      'as'=> 'signin'
    ]);

    $api->get('/home',[
      'uses' => 'LoginController@homeScreen',
      'as' => 'home',
      'middleware' => 'auth'
    ]);

    $api->get('user/validate','App\Http\Controllers\UserController@validateUser');
    //create a route where we can display the form for user to submit
    $api->get('signupowner','OwnerController@getOwnerSignup');
    $api->post('signupowner','OwnerController@postOwnerSignup');

    /*
    $api->get('/email',function(){
      Mail::send('layouts.test',$data, function($message) use ($data){
          $message->from($data['email']);
          $message->to('sumeet.shahani108@gmail.com');
          $message->subject($data['']);
      });
    });
    */
});
