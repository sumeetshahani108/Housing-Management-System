
    {!! Form::open(['route' => '', 'method' => 'post']) !!}

    <div>
        {!! Form::label('username', 'Enter Your Username') !!}
        {!! Form::text('password') !!}
    </div><br>

    <div>
        {!! Form::label('password', 'Enter your Password') !!}
        {!! Form::text('password') !!}
    </div><br>

    <div>
        {!! Form::submit('Log in') !!}
    </div>

    <div>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
    </div>

    {!! Form::close() !!}

