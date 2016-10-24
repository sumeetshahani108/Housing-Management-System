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

//We use alias instead of authorization instance
//use LucaDegasperi\OAuth2Server\Authorizer;

$api = app('Dingo\Api\Routing\Router');

//default redirection route
Route::get('/welcome',function(){
    return view('welcome');
});

Route::post('/viewApts', 'SearchController@searchApts');

//Return singin page
Route::get('/buy',function(){
    return view('owner.sign');
});

Route::get('/buy',[
    'uses' => 'SearchController@viewSignIn',
    'as' => 'buy'
]);

//Route for sign-in owner
Route::get('/view',function(){
   return view('owner.sign');
});

Route::post('/signup',[
    'uses' => 'OwnerController@signUpOwner',
    'as' => 'sign-up.owner'
]);

//Route for log-in owner
Route::get('login',function(){
   return View::make('owner.login');
});

Route::post('login','OwnerController@ownerSignIn');

//Route for details view
Route::get('/view-details/{id}',[
   'uses' => 'apt_details_controller@getDetails',
    'as' => 'apartment.details-view'
]);
//edit route
Route::post('/edit',[
    'uses' => 'apt_data_controller@postEditPost',
    'as' => 'edit'
]);
//Route for AJAX request
//Route::get('home/{value}', 'SearchController@getApartments');

//Routes for the Search filters
Route::get('/get',[
    'uses' => 'SearchController@search',
    'as' => 'test'
]);


//Route for Rating

Route::get('/rate',function(){
    return view('rating');
});

Route::post('/rating/',[
    'uses' => 'RatingController@rate',
    'as' => 'rating.apartment'
]);


Route::get('/home',[
    'uses' => 'SearchController@viewSearchFilter',
    'as' => 'view.home'
]);

//Booking the Apartment
Route::post('/view-details/{apt_id}',[
   'uses' => 'BookingController@booking',
    'as' => 'booking.apt'
]);

//Password reset routes
// ? indicates that it is optional, It may or may not be present in the URL.

//Password reset link request routes
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

//Password reset routes
Route::get('password/reset/{token?}', 'Auth\PasswordController@getReset');
Route::post('password/reset','Auth\PasswordController@postReset');

//Routes to create the apartment
Route::get("/apartment",[
    'uses' => 'apt_data_controller@index',
    'as' => 'create.apt'
]);

//View after the owner login
Route::get('/owner',[
   'uses' => 'OwnerController@viewMainPage',
    'as' => 'owner.main'
]);

Route::get('/owner-apartments',[
    'uses' => 'OwnerController@viewMyApartments',
    'as' => 'get.owner.apartments'
]);

Route::post("/apartmentbasic","apt_data_controller@store");
Route::post("apartmentadditonal","apt_details_controller@store");


$api->version('v1', function ($api) {
    $api->post('oauth/access_token', function() {
        return Authorizer::issueAccessToken();
    });
});

$api->version('v1',function($api){

    $api->get('users/{user_id}/roles/{role_name}','App\Http\Controllers\HomeController@attachUserRole');

    $api->get('users/{user_id}/roles','App\Http\Controllers\HomeController@getUserId');

    $api->post('roles/permission/add','App\Http\Controllers\HomeController@attachPermission');

    $api->get('role/{role_name}/permissions','App\Http\Controllers\HomeController@getPermissions');

    $api->post('authenticate','App\Http\Controllers\Auth\AuthController@authenticate');
});



// Middleware for Authentication
//Methods inside have to go through authentication

$api->version('v1',['middleware' => 'api.auth'],function($api){

    $api->get('user','App\Http\Controllers\Auth\AuthController@show');
    Route::get('home/{value}', 'SearchController@getApartments');
    //route to refresh the token
    //very important
    $api->get('users','App\Http\Controllers\Auth\AuthController@index');
    $api->get('token','App\Http\Controllers\Auth\AuthController@getToken');

    $api->post('delete','App\Http\Controllers\Auth\AuthController@deleteUser');

    $api->get('user/validate','App\Http\Controllers\UserController@validateUser');
    //create a route where we can display the form for user to submit


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
