

    {!! Form::open(array('route' => 'signup.owner', 'method' => 'post', 'files'=>true, 'before' => 'csrf' )) !!}

    <div>
        {!! Form::label('first_name', 'First Name') !!}
        {!! Form::text('first_name') !!}
    </div>

    <div>
        {!! Form::label('last_name', 'Last Name') !!}
        {!! Form::text('last_name') !!}
    </div>

    <div>
        {!! Form::label('email', 'Email-Id') !!}
        {!! Form::email('email') !!}
    </div>

    <div>
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password') !!}
    </div>

    <div>
        {!! Form::label('contact', 'Contact No.') !!}
        {!! Form::number('contact') !!}
    </div>

    <div>
        {!! Form::label('address', 'Residential Address') !!}
        {!! Form::text('address') !!}
    </div>

    <div>
        {!! Form::label('gender', 'Gender') !!}
        {!! Form::select('gender',array('male' => 'Male', 'female' => 'Female', 'other' => 'Other'),'male') !!}
    </div>

    <div>
        {!! Form::label('age', 'Age') !!}
        {!! Form::text('age') !!}
    </div>

    <div>
        {!! Form::label('regulations', 'Regulations') !!}
        {!! Form::text('regulations') !!}
    </div>

    <div>
        {!! Form::submit('Click here to Sign in') !!}
    </div>

    <div>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
        <!--Session token : It is facade, They are shortcuts to our functions-->
    </div>

    {!! Form::close() !!}
