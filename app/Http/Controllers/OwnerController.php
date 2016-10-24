<?php

namespace App\Http\Controllers;

//This class is to get the request object.
use Illuminate\Http\Request;
use App\Apartment;
use DB;
use App\Owner;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Mail;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Image;

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
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(350, 350)->save(public_path('/img/' . $filename));
            $Owner->image = $filename;
        }
        $Owner->save();


        //Session::flash('success','Your email was sent');
        $data = array(
            'email' => $email,
            'full_name' => $first_name." ".$last_name
        );
        Mail::send('emails.contact', $data ,function($message) use ($data){
            $message->from($data['email']);
            $message->to('sumeet.shahani108@gmail.com');
            $message->subject($data['full_name']);
        });

        if(count(Mail::failures()) > 0){
            foreach(Mail::failures as $email_address) {
                echo " - $email_address <br />";
            }
        }else{
            return view('welcome');
        }
    }

    public function viewWelcome(){
        return view('welcome');
    }

    public function ownerSignIn(Request $request){
        //Get all the post data
        $data = Input::all();

        //Applying validation rules
        $rules = array(
            'email' => 'required | email',
            'password' => 'required | min : 6',
        );
        $userdata = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );
        //login
        if(Auth::validate($userdata)){
            if(Auth::attempt($userdata)){
                if($request['type'] == 'owner'){
                    return redirect()->route('owner.main');
                }else{
                    return redirect()->route('view.home');
                }
            }
        }else{
            echo "Failed Session";
        }
    }

    public function viewMainPage(){
        return view('owner.main');
    }

    public function viewMyApartments(Apartment $apartment){
        if(Auth::check()){
            $owner_id = Auth::user()->owner_id;
            $owner_apartments = $apartment->newQuery();
            $owner_apartments->where('owner_id', $owner_id);
            $query = $owner_apartments->get();
            //echo $query;
            return view('owner.myapartments',['apartment' => $query]);
        }

    }

    public function logOut(){
        Auth::logout();
        //redirection route ;
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
