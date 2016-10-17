<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Owner;
use Mockery\CountValidator\Exception;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    //We have to comment out the contructor for the middleware to function properly
    /*
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }
    */
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function authenticate(Request $request){
        $credentials = $request->only('email','password');
        try{
            if(! $token = JWTAuth::attempt($credentials)){
                return $this->response->error(['error' => 'User credentials are not Correct'],401);
            }
        }catch (JWTException $ex){
            return $this->response->error([
                'error'=>'Something went wrong'
            ],500);
        }

        return $this->response->array(compact('token'))->setStatusCode(200);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    //get all the user
    public function index(){
        try{
            return User::all();
        }catch (Exception $ex){
            return $ex;
        }
    }

    //User based on ID
    public function show(){
        try{
            $user = JWTAuth::parseToken()->toUser();
            if(! $user){
                return $this->response->errorNotFound('User not found');
            }
        }catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $ex){
            return $this->response->error('Token is Invalid');
        }catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $ex){
            return $this->response->error('Token is Expired');
        }catch (\Tymon\JWTAuth\Exceptions\TokenBlacklistedException $ex){
            return $this->response->error('Token is BlackListed');
        }

        return $this->response->array(compact('user'))->setStatusCode(200);
    }

    //Function to refresh the token and send back to client
    public function getToken(){
        $token = JWTAuth::getToken();
        if(! $token){
            return $this->response->errorUnauthorized('Token is Invalid');
        }
        try{
            $refreshToken = JWTAuth::refresh($token);
        }catch (JWTException $ex){
            $this->response->error('Something went wrong');
        }
        return $this->response->array(compact('refreshToken'));
    }

    public function deleteUser(){
        //parseToken() function is to validate the token
        $user = JWTAuth::parseToken()->authenticate();
        if(! $user){
            //fail the delete process
        }
        //If the user is valid, execute the delete process
        $user->delete();
    }
}
