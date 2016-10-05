<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Create_apt ;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class apt_data_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view("apartment.apt_data");
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
        $user->type_of_apartment = Input::get("toa");
        $user->locality = Input::get("locality");
        $user->city = Input::get("city");
        $user->price = Input::get("price");
        $user->carpet_area = Input::get("carpet_area");
        $user->BHK = Input::get("bhk");
        $user->no_of_bathrooms = Input::get("no_of_bathrooms");
        $user->no_of_bedrooms = Input::get("no_of_bedrooms");
        $user->flooring_type = Input::get("flooring_type");
        $user->apt_condition = Input::get("apt_condition");
        $user->owner = Input::get("owner");
        $user->year_of_construction = Input::get("year_of_construction");

        //Image upload functionality
        /*
        $file = $request->file('image');
        $filename = "apartment".'_'.$request['locality'].'_'.$request['city'].'.jpg';

        if($file){
            //Storage allows us to store files of any kind.
            Storage::disk('local')->put($filename,File::get($file));
        }
        */
        if(Input::hasFile('image')){
            $file = Input::file('image');
            $file->move(public_path().'/',$file->getClientOriginalName());
            $user->apt_image = $file->getClientOriginalName();
        }


        /*
        if($request->owner()->apartment()->save($user)){
            return view("welcome");
        }
        */
        $user->save();
        return view('welcome');
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
