<!DOCTYPE html>
<html>
<head>
    <script src=??//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js??></script>
    <link rel=??stylesheet?? id=??font-awesome-css?? href=??//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css?? type=??text/css?? media=??screen??>
    <style>
        .top-container{
            height: 110px;
            border-bottom: 1px solid black;
        }
        .top-text{
            text-align: center;
            letter-spacing: 2px;
            margin: 7% 0%;
            font-size: 25px;
        }
        .image-container{
            background: url(img/signup.jpg);
            background-repeat: no-repeat;
            background-size: 1400px 1000px;
        }
        .main-container{
            opacity: 0.9;
        }
        .container{
            margin: auto;
            width: 40%;
            height: 100%;
            border: 1px solid black;
        }
        .myinput{
            height: 50px;
            padding-left: 20px;
            font-weight: 500;
            width: 350px;
            margin-top: 4%;
            margin-left: 12%;
        }
        .drop{
            height: 50px;
            padding-left: 20px;
            font-weight: 500;
            width: 374px;
            margin-top: 4%;
            margin-left: 12%;
        }
        .button{
            height: 50px;
            line-height: 48px;
            border: 2px solid #ff5a5f;
            background: #ff5a5f;
            color: #fff;
            margin: 4% 12%;
            width: 374px;
            font-size: 11px;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
            border-radius: 0 !important;
        }
        .terms{
            margin-top: 1%;
            margin-bottom: 4%;
            text-align: center;
        }
        .bottom-container{
            padding-top: 30px;
            text-align: center;
            font-size: 20px;
            height: 50px;
            color: #ff5a5f;
        }
    </style>
</head>
<body>
<div class = "top-container">

</div>
<div class = "image-container">
    <div class = "main-container">
        <div class = "container">
            <div class = "top-text">
                REGISTER
            </div>

            {!! Form::open(array('route' => 'sign-up.owner', 'method' => 'post', 'files'=>true, 'before' => 'csrf' ,'enctype' => 'multipart/form-data' )) !!}

            {!! Form::text('first_name', null, array('required','placeholder' => 'FIRST NAME','class' => 'myinput')) !!}

            {!! Form::text('last_name', null, array('required','placeholder' => 'LAST NAME','class' => 'myinput')) !!}

            {!! Form::email('email', null, array('required','placeholder' => 'Email Address','class' => 'myinput')) !!}

            {!! Form::password('password', array('required','placeholder' => 'PASSWORD','class' => 'myinput')) !!}

            {!! Form::number('contact', null, array('required','placeholder' => 'CONTACT','class' => 'myinput')) !!}

            {!! Form::text('address', null, array('required','placeholder' => 'ADDRESS','class' => 'myinput')) !!}

            {!! Form::select('gender',['male' => 'MALE', 'female' => 'FEMALE', 'other' => 'OTHER'],null,['class' => 'drop']) !!}

            {!! Form::text('age', null, array('required','placeholder' => 'AGE','class' => 'myinput')) !!}

            {!! Form::text('regulations', null, array('required','placeholder' => 'REGULATIONS','class' => 'myinput')) !!}

            {!! Form::file('image',null, array('id' => 'image')) !!}


            {!! Form::submit('Click here to Sign in',array('type' => 'button','class' => 'button')) !!}



            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <!--Session token : It is facade, They are shortcuts to our functions-->

            <div class = "terms">
                By signing up, You agree to our <br>
                <strong>TERMS AND CONDITIONS</strong>.
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>


<div class = "bottom-container">
    &copyCopyright 2016 - AMS
</div>

</body>
</html>
