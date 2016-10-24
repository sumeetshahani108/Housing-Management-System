<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\Owner;
use App\Ratings;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class apt_details_controller extends Controller
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
    public function create()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function getDetails($apt_id, Apartment $apartment, Owner $owner, Ratings $rating){
        //get the details of the apartment using the $id
        $my_data_query = $apartment->newQuery();
        $my_data_query->where('apt_id',$apt_id);
        $data = $my_data_query->get();
        //echo $data;
        foreach($data as $a){
            $id = $a->owner_id;
            $for_rating_id = $a->apt_id;
        }
        $my_owner_query = $owner->newQuery();
        $my_owner_query->where('owner_id', $id);
        $owner_data = $my_owner_query->get();
        //echo $owner_data;

        $my_rating_query = $rating->newQuery();
        $my_rating_query->where('apartment_id',$for_rating_id);
        $rating_data = $my_rating_query->get();
        //$rating_data;

        return view('apartment.details-view',['my_apartment_details' => $data, 'owner_details' => $owner_data, 'rating_details' => $rating_data]);
    }

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
