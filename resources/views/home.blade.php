@extends('layouts.master')

@section('content')

    {!! Form::open(['route' => 'test', 'method' => 'get']) !!}

        <div>
            <label>Range</label>
            min <input type="text" name="min_price">
            max <input type="text" name="max_price">
        </div>
    <!--
        <div>
            {!! Form::label('type','Type of Apartment') !!}
            {!! Form::select('type',['apartment'=>'apartment','bunglow'=>'bunglow','villa'=>'villa','0castle'=>'castle','lighthouse'=>'lighthouse']) !!}
        </div>

        <div>
            {!! Form::label('BHK','No. of BHK') !!}
            {!! Form::select('BHK',['1'=>'1 BHK','2'=>'2 BHK','3'=>'3 BHK','4'=>'4 BHK','5'=>'5 BHK']) !!}
        </div>
    -->

        <div>
            {!! Form::label('locality', 'Locality') !!}
            {!! Form::text('locality') !!}
        </div>

        <div>
            {!! Form::label('city', 'City') !!}
            {!! Form::text('city') !!}
        </div>

        <button> OK </button>

        <hr>

     {!! Form::close() !!}
@endsection