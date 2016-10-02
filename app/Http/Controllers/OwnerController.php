<?php

namespace App\Http\Controllers;

//This class is to get the request object.
use Illuminate\Http\Request;
use App\Owner;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Session;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // An example of dependency injection
    public function signUpOwner(Request $request){

        //validate() is a helper function developed in laravel framework.
        // include in App\Http\Controllers\Controller

        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $email = $request['email'];
        $password = bcrypt($request['password']);
        $contact = $request['contact'];
        $address = $request['address'];
        $gender = $request['gender'];
        $age = $request['age'];
        $regulations = $request['regulations'];

        $Owner = new Owner();
        $Owner->first_name = $first_name;
        $Owner->last_name = $last_name;
        $Owner->email = $email;
        $Owner->password = $password;
        $Owner->contact = $contact;
        $Owner->address = $address;
        $Owner->gender = $gender;
        $Owner->age = $age;
        $Owner->regulations = $regulations;

        $Owner->save();

        $this->validate($request, [
           'email' => 'required|email|unique:owner',
           'first_name' => 'required|max:120',
           'last_name'=>'required|max:120',
           'contact' => 'required|max:15',
           'address' => 'required',
           'gender' => 'required',
           'age' => 'required',
           'regulations' => 'required',
           'password' => 'required|min:4'
       ]);

        /*
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $first_name.$last_name;
        $data['subject'] = "Congratulations on Creating Your Account. We look forward to Work with you.";
        //function() here is a closure;
        Mail::send('emails.account',$data,function(){
          //We can change the parameter values in from and to depending on what we want to do.
          $message->from($data['email']);
          $message->to('sumeet.shahani@ves.ac.in');
          $message->subject($data['subject']);
        });
        */
        //Session::flash('success','Your email was sent');

        return redirect()->route('test');
    }

    public function getOwnerSignup(){
      //Home Page form view
      return view('pages.contact');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
