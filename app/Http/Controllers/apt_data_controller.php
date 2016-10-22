<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;

use App\Http\Controllers\Controller;
use Image;
use App\Create_apt ;
use App\Owner ;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class apt_data_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            return view("apartment.apt_data");
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $user = new Create_apt();
        $user->type_of_apartment = $request['toa'];
        $user->locality = $request['locality'];
        $user->city = $request['city'];
        $user->price = $request['price'];
        $user->carpet_area = $request['carpet_area'];
        $user->BHK = $request['bhk'];
        //$user->no_of_bathrooms = $request['no_of_bathrooms'];
        $user->no_of_bedrooms = $request['no_of_bedrooms'];
        $user->flooring_type = $request['flooring_type'];
        $user->apt_condition = $request['apt_condition'];
        $user->owner = $request['owner'];
        $user->year_of_construction = $request['year_of_construction'];
        $user->owner_id = Auth::user()->owner_id ;
        //Image upload functionality
        /*
        $file = $request->file('image');
        $filename = "apartment".'_'.$request['locality'].'_'.$request['city'].'.jpg';

        if($file){
            //Storage allows us to store files of any kind.
            Storage::disk('local')->put($filename,File::get($file));
        }
        */
        /*
        if(Input::hasFile('image')){
            $file = Input::file('image');
            $file->move(public_path().'/'.$file->getClientOriginalName());
            $user->apt_image = $file->getClientOriginalName();
        }
        */

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(350,350)->save( public_path('/img/'.$filename) );
            $user->apt_image = $filename;
        }

        /*
        if($request->owner()->apartment()->save($user)){
            return view("welcome");
        }
        */



        $user->save();
        if(Auth::check()){
            return view('master');
        }


    }

    public function getUserImage($filename){
        $file = Storage::disk('local')->get('filename');
        return new Response($file, 200);
    }

    //Auth::user() -> returns the user currently logged in.
    public function deleteApartment($apartment_id){
        $apt = Post::where('apt_id',$apartment_id);
        if(Auth::user() != $apt->user){
            return redirect()->back();
        }
        $apt->delete();
        //return redirection route  ;
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
