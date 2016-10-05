@extends('layouts.master')

@section('content')
    @foreach($apartment as $apt)
        <!--Access the image as well normally like this-->
        <h2>{{ $apt->price }}</h2>
        <h3>{{ $apt->city }}</h3>
        <h3>{{ $apt->type_of_apartment }}</h3>
    @endforeach
@endsection