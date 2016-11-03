<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;
use App\Like;
use App\Owner;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class interestedController extends Controller
{

    public function postLikePost(Request $request)
    {
        $apt_id = $request['apt_id'];
        $is_Like = $request['isLike'] === 'true';
        $update = false;
        $apt = Apartment::find($apt_id);
        if(!$apt){
            return null;
        }
        $owner = Auth::user();
        $like = $owner->likes()->where('apt_id',$apt_id)->first();
        if($like) {
            $already_like = $like->interested;
            $update = true;
            if ($already_like == $is_like) {
                $like->delete();
                return null;
            }
        }else{
            $like = new Like();
        }
        $like->interested = $is_Like;
        $like->owner_id = $owner->owner_id;
        $like->owner_first_name = $owner->first_name;
        $like->owner_last_name = $owner->last_name;
        $like->owner_contact = $owner->contact;
        $like->owner_email = $owner->email;
        $like->apt_id = $apt->apt_id;
        if($update){
            $like->update();
        }
        else{
            $like->save();
        }
        return null;
    }

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
