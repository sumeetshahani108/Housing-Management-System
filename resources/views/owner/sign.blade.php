<!DOCTYPE html>
<html>
<head>
    <script src=??//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js??></script>
    <link rel=??stylesheet?? id=??font-awesome-css?? href=??//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css?? type=??text/css?? media=??screen??>
    <style>
        /*Modal*/
        /*Modal style*/
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            background: url(img/log.jpg);
            background-size: 580px 400px;
            background-repeat: no-repeat;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 40%;
            height: 57%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s

        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }


        .modal-body {
            padding: 2px 16px;
            width:100%;
            height:100%;
            margin-left: -5%;
        }
        .form{
            margin-top: 2%;
            margin-left: 14%;
            opacity: 0.9;
        }
        img{
            width: 86%;
        }
        table{
            margin-top: 13%;
        }
        .modal-button{
            height: 50px;
            line-height: 48px;
            width: 40%;

            color: black;
            margin-left: 23%;
            margin-top: 7%;
            font-size: 11px;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
            border-radius: 0 !important;
        }
        .modal-input{
            height: 50px;
            padding-left: 20px;
            font-weight: 500;
            width: 370px;
            margin-top: 4%;
        }
        /*End Modal*/
        .top-container{
            height: 110px;
            border-bottom: 1px solid black;
        }
        .top-text{
            text-align: center;
            letter-spacing: 2px;
            margin-left: -41%;
            color: #0e385f;
            font-weight: bold;
            font-size: 32px;
            margin-top: 10%;
            margin-bottom: 6%;
        }
        .main-container{
            opacity: 0.9;
        }
        .right-container{
            margin-left: 57%;
            width: 40%;
            height: 100%;
            margin-top: -42%;
        }
        .myinput{
            height: 50px;
            padding-left: 20px;
            font-weight: 500;
            width: 350px;
            margin-top: 4%;
            margin-left: 12%;
        }
        .myinput-fname{
            height: 50px;
            padding-left: 20px;
            font-weight: 500;
            width: 157px;
            margin-top: 4%;
            margin-left: 12%;
        }
        .myinput-lname{
            height: 50px;
            padding-left: 20px;
            font-weight: 500;
            width: 157px;
            margin-top: 4%;
            margin-left: 1%;
        }
        .drop{
            height: 50px;
            padding-left: 20px;
            font-weight: 500;
            width: 374px;
            margin-top: 4%;
            margin-left: 12%;
        }
        .file{
            margin-left: 12%;
            margin-top: 4%;
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
        .left-container{
            margin-right: 47%;
            margin-left: 11%;
            margin-top: 6%;
            color: #0e385f;
            font-size: 27px;
            font-weight: bold;
            line-height: 29px;
        }
        .image-container{
            margin-top: 9%;
            margin-left: -3%;
            width: 106%;
        }
        /*Footer*/
        .footer{
            font-family: sans-serif;
            background-color: #5f6369;
            padding: 5px;
            position: absolute;
            left:0;
            right:0;
            margin-top: 5%;
        }
        ul.address-list{
            display: inline-block;
            color: #ffffff;
            text-decoration: none;
            list-style-type: none;
            float: left;
            clear: right;
            padding: 25px;
        }
        .list-item-1{
            display: inline;
            color: #ffffff;
        }
        .list-item-2{
            display: inline;
            color: #ffffff;
        }

        .footer-circle{
            padding: 5px;
            min-width: 20px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
        }
        .social-media-link .social-media-element {
            list-style-type: none;
            display: inline;
            object-fit: none;
            object-position: center;
            height: 100px;
            width: 100px;
            margin: 30px;
        }
        .social-media-link .social-media-element .media-link i {
            color: #5f6369;
            font-size: 20px;
            text-align: center;
            transition: all 0.2s ease-in-out;
            text-align: center;
            object-position: center;
            background-color: #ffffff;
            padding-top: 5px;
        }
        .social-media-link .social-media-element .media-link i:hover {
            color: #5f6369;
            background-color: #ccced1;
        }
        .last-line{
            color: #ffffff;
            text-align: center;
            clear: both;
            margin: 0px;
            padding: 0px;
        }
        .social-links{
            float: right;
        }
        .last-line span{
            color: #ffffff;
        }
        .last-line span:hover{
            text-decoration: underline;
            cursor: pointer;
        }
    </style>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class = "top-container">
    <button id="booking-modal-button" class = "book">Login</button>
</div>

<div class = "main-container">
    <div class = "left-container">
        AMS helps you connect and share with the people in your life.
        <div class = "image-container">
            <img src="{{URL::asset('/img/mumbai.jpg')}}">
        </div>
    </div>
    <div class = "right-container">
        <div class = "top-text">
            REGISTER
        </div>

        {!! Form::open(array('route' => 'sign-up.owner', 'method' => 'post', 'files'=>true, 'before' => 'csrf' ,'enctype' => 'multipart/form-data' )) !!}

        {!! Form::text('first_name', null, array('required','placeholder' => 'FIRST NAME','class' => 'myinput-fname')) !!}

        {!! Form::text('last_name', null, array('required','placeholder' => 'LAST NAME','class' => 'myinput-lname')) !!}

        {!! Form::email('email', null, array('required','placeholder' => 'Email Address','class' => 'myinput')) !!}

        {!! Form::password('password', array('required','placeholder' => 'PASSWORD','class' => 'myinput')) !!}

        {!! Form::number('contact', null, array('required','placeholder' => 'CONTACT','class' => 'myinput')) !!}

        {!! Form::text('address', null, array('required','placeholder' => 'ADDRESS','class' => 'myinput')) !!}

        {!! Form::select('gender',['male' => 'MALE', 'female' => 'FEMALE', 'other' => 'OTHER'],null,['class' => 'drop']) !!}

        {!! Form::text('age', null, array('required','placeholder' => 'AGE','class' => 'myinput')) !!}

        {!! Form::select('type_of_user',['owner' => 'OWNER', 'user' => 'TENANT'],null,['class' => 'drop']) !!}

        {!! Form::text('regulations', null, array('required','placeholder' => 'REGULATIONS','class' => 'myinput')) !!}

        <div class = "file">
            {!! Form::file('image',null, array('id' => 'image')) !!}
        </div>

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

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">

        <div class="modal-body">
            <span id = "close-login" class="close">�</span>

            <div class = "form">
                {!! Form::open(array('url' => 'login','method' => 'post')) !!}


                {!! Form::text('email', null, array('required','placeholder' => 'Email Address','class' => 'modal-input')) !!}

                <br>

                {!! Form::password('password', array('required','placeholder' => 'Password','class' => 'modal-input')) !!}
                <br>

                {!! Form::select('type',['owner' => 'Owner','user' => 'Tenant'],null,['class' => 'modal-input']) !!}

                {!! Form::submit('Log in',array('type' => 'button','class' => 'modal-button')) !!}

                <input type="hidden" name="_token" value="{{ Session::token() }}">

                {!! Form::close() !!}
            </div>
        </div>

    </div>

</div>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("booking-modal-button");

    // Get the <span> element that closes the modal
    var span = document.getElementById("close-login");

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<!--footer-->
<div class="footer">
    <div class="footer-text">
        <ul class="address-list">
            <li id="name" class="list-item-1">
                Follow us on the Social Network
            </li>

        </ul>
    </div>
    <div class="social-links">
        <ul class="social-media-link">
            <li class="social-media-element"><a href="http://facebook.com/" class="media-link"><i class="fa fa-facebook footer-circle" ></i></a></li>
            <li class="social-media-element"><a href="http://linkedin.com/" class="media-link"><i class="fa fa-linkedin footer-circle"></i></a></li>
            <li class="social-media-element"><a href="http://twitter.com/" class="media-link"><i class="fa fa-twitter footer-circle"></i></a></li>
            <li class="social-media-element"><a href="http://plus.google.com/" class="media-link"><i class="fa fa-google-plus footer-circle"></i> </a></li>
        </ul>
    </div>
    <div class="last-line">
        <p>&copy; <span>APARTMENT TRACKER</span> 2016/ All rights reserved.
        </p>
    </div>
</div>

</body>
</html>
