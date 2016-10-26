<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ratings;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Booking;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
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
    public function rate(Request $request, Booking $booking){

        $my_apartment_get_query = $booking->newQuery();
        $my_apartment_get_query->where('user_id',Auth::user()->owner_id);
        $my_data = $my_apartment_get_query->get();

        foreach($my_data as $data){
            $apartment_id = $data->apartment_id;
        }

        $rate = new Ratings();
        $rate->apartment_id = $apartment_id;
        $rate->my_profile_id = Auth::user()->owner_id;
        //$rate->profile_id = Auth::user()->id ;
        $rate->rating = $request['rating'];
        $rate->description = $request['rating_description'];

        $rate->save();

        return view('home');
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
