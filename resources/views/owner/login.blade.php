
    {!! Form::open(['route' => 'login.owner', 'method' => 'post']) !!}

    <div>
        {!! Form::label('email', 'Enter Your Email') !!}
        {!! Form::text('email') !!}
    </div><br>

    <div>
        {!! Form::label('password', 'Enter your Password') !!}
        {!! Form::password('password') !!}
    </div><br>

    <div>
        {!! Form::submit('Log in') !!}
    </div>

    <div>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
    </div>
    {!! Form::close() !!}