
@section('content')
    {!! Form::open(['route' => 'specify_the_name_here', 'method' => 'post']) !!}

    <div>
        {!! Form::label('username', 'Enter Your Username') !!}
        {!! Form::text('password') !!}
    </div>

    <div>
        {!! Form::label('password', 'Enter your Password') !!}
        {!! Form::text('password') !!}
    </div>

    {!! Form::close() !!}}
@endsection