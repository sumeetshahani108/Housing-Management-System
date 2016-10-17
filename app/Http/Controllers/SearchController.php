<?php

namespace App\Http\Controllers;

use App\Apartment;
use Illuminate\Http\Request;
use App\Search\UserSearch;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function index()
    {
        //
    }

    public function viewSearchFilter(){
        //$apartment =

        //We then pass all the data to our view
        //['data'] => $data ;
        //foreach() loop
        //use the blade template syntax. $data->attribute_name ; for e.g. $post->body


        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request,Apartment $apartment){
        //Fetch the Output of the filters here
        /*
        $locality  = $request['locality'];
        $city = $request['city'];

        $result = DB::table('apartment_data')->where('locality','=',$locality)->where('city','=',$city)->get();
        print_r($result);
        return view('test',['apartment' => $result]);
        */
        //return UserSearch::apply($request);
        $apt = $apartment->newQuery();
        if($request->has('locality')){
            $apt->where('locality',$request->input('locality'));
        }
        if($request->has('city')){
            $apt->where('city',$request->input('city'));
        }
        if($request->has('type')){
            $apt->where('type_of_apartment',$request->input('type'));
        }
        if($request->has('BHK')){
            $apt->where('BHK',$request->input('BHK'));
        }
        if($request->has('min_price')){
            $apt->where('price','>=',$request->input('min_price'));
        }
        if($request->has('max_price')){
            $apt->where('price','<=',$request->input('max_price'));
        }
        //laravel handles the pagination.
        $query = $apt->orderBy('apt_id','desc')->paginate(5);
        //echo $query;
        return view('test',['apartment' => $query]);
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
