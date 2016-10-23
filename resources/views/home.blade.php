
<html>
    <head>
        <style>
            fa-search:before
            {content:"\f002"}
            fa-search-plus:before{content:"\f00e"}
            .fa-search-minus:before{content:"\f010"}
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
                background-size: 580px 300px;
                background-repeat: no-repeat;
                margin: auto;
                padding: 0;
                border: 1px solid #888;
                width: 40%;
                height: 45%;
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
            tr{

            }
            .td{
                padding: 10px 15px;
            }
            .button{
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
            .myinput{
                height: 50px;
                padding-left: 20px;
                font-weight: 500;
                width: 370px;
                margin-top: 4%;
            }
            /*top style */
            .top-container{
                height: 90px;

            }
            .top-left-container{
                width: 200px;
                color: #3D7700;
                height: 90px;
                position: absolute;
                margin-left: 13%;
                margin-top: 2%;
            }
            .img{
                width: 50px;
                height: 50px;
            }
            .logo{
                font-family: "papyrus",fantasy;
            }
            .top-center-container{
                margin-left: 40%;
            }
            .button1{
                color: black;
                width: 80px;
                font-size: 13px;
                text-transform: uppercase;
                font-weight: bold;
                height: 50px;
                opacity: 0.9;
                margin-top: -20%;
                margin-left: 45%;
            }
            .button2{
                color: black;
                width: 80px;
                font-size: 13px;
                text-transform: uppercase;
                font-weight: bold;
                height: 50px;
                opacity: 0.9;
                margin-top: -20%;

            }
            .top-right-container {
                padding: 100px;
                margin-left: 70%;
                height: 90px;
                margin-top: -5%;
                position: absolute;
            }
            /*end top*/
            .tagline{
                margin-left: 25%;
                margin-top: -1%;
                color: white;
                font-size: 50px;
                margin-bottom: 4%;
            }
            /* middle */
            .center-container{
                width: 100%;
                height: 600px;
                background: url('img/log.jpg');
                background-size: 100% 600px;
                margin-top: -7.6%;
            }
            .images{
                width: 100%;
                height: 600px;
                opacity: 1;
            }
            .w3-animate-right{position:relative;-webkit-animation:animateright 0.4s;animation:animateright 2s}
            @-webkit-keyframes animateright{from{right:-300px;opacity:0} to{right:0;opacity:1}}
            @keyframes animateright{from{right:-300px;opacity:0} to{right:0;opacity:1}}

            .filters{
                padding-top: 174px;
            }
            .glass{
                background-color:rgba(0,0,0,0.3);
                height: 115px;
                width: 772px;
                margin-left: 20%;
                padding-left:35px;
                padding-top:12px;
                border-radius:8px;
                color:white;
                font-weight:bolder;
                box-shadow:2px 2px 2px black;
            }
            .form-filter{
                opacity:0.9;
            }
            .city{
                height: 40px;
                padding-left: 20px;
                font-weight: 500;
                width: 190px;
                margin-top: 1%;
            }
            .locality{
                height: 40px;
                padding-left: 20px;
                font-weight: 500;
                width: 400px;
                margin-left: -1.08%;
                margin-top: 1%;
            }
            .bhk{
                height: 40px;
                padding-left: 20px;
                font-weight: 500;
                width: 150px;
                margin-left: -1.2%;
                margin-top: 1%;
            }
            .toa
            {
                height: 40px;
                padding-left: 20px;
                font-weight: 500;
                margin-top: 1%;
                width: 190px;
            }
            .min, .max{
                height: 40px;
                padding-left: 20px;
                font-weight: 500;
                margin-top: 1%;
                width: 190px;
            }
            .search{
                height: 40px;
                font-weight: 500;
                margin-top: 1%;
                width: 150px;
                border: 2px solid #ff5a5f;
                background: #ff5a5f;
            }
            /*end middle */


            /* login */
            #main {
                list-style: none;
                margin: 0;
                padding: 0;
            }
            #main > li {
                float: left;
                padding: 5px 10px;

                margin: 10px;
            }
            .sub {
                display: none;
                clear: both;
                list-style: none;
                width: 170px;
                height: 80px;
                margin-top: 1%;
                border: 1px solid red;
                padding-left: 1px;
                background-color: #ff5a5f;
                opacity: 0.8;
            }
            li > a:hover ~ .sub {
                display:block;
            }
            .sub:hover {
                display: block;
            }
            a:link, a:hover, a:visited, a:active{
                text-decoration: none;
                color: white;
                font-family: "papyrus",fantasy;
                font-size: 25px;
                padding-left: 42px;
            }
            .login-sub a:link, a:hover, a:visited, a:active{
                text-decoration: none;
                color: white;
                font-family: "papyrus",fantasy;
                font-size: 25px;
                padding-left: 42px;
                padding-top: 10px;
            }
            /*destinations */
            .destinations{
                border: 1px solid black;
                margin-top: -9%;
                margin-left: 7%;
                width: 85%;
                background-color: white;
                align-content: center;
            }
            .text{
                margin-top: 5%;
                margin-left: 6%;
                font-size: 50px;
                letter-spacing: 2px;
            }
            .contain {
                margin-left: 9%;
                margin-top: -4%;
                max-width: 960px;
                padding-top: 100px;
                text-align: center;
                padding-bottom: 80px;
            }
            .category1 {
                position: relative;
                display: inline-block;
                width: 684px;
                padding-left: 7px;
                margin-top: 0%;
                margin-left: -8%;
            }
            .mumbai {
                position: absolute;
                bottom: 14px;
                left: 69px;
                font-size: 37px;
                color: white;
            }

            .category2 {
                position: relative;
                display: inline-block;
                width: 396px;
                margin-left: -6%;
            }
            .bangkok {
                position: absolute;
                bottom: 207px;
                left: 44px;
                font-size: 37px;
                color: white;
            }
            #image{
                width: 86%;
                height: 29%;
                margin-bottom: -8%;
            }
            .space{
                padding-top: 42px;
            }
            .paris {
                position: absolute;
                bottom: 8px;
                left: 43px;
                font-size: 37px;
                color: white;
            }
            .category3{
                margin-left: -10.2%;
                margin-top: 1%;
                width: 1107px;
            }
            .greece{
                position: absolute;
                bottom: -870px;
                left: 201px;
                font-size: 37px;
                color: white;
            }
            .footer{
                font-family: sans-serif;
                background-color: #5f6369;
                padding: 5px;
                position: absolute;
                left:0;
                right:0;
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
                margin: 4px;
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
            .my-suggestions{
                border: 1px solid #000000;
                width: 1300px;
                height: 300px;
                margin-left: 20px;
                margin-top: 20px;
            }
            .loaded-image-1{
                border: 1px solid #000000;
                width: 300px;
                height: 250px;
                margin-left: 100px;
                margin-top: 20px;
            }
            .loaded-image-2{
                border: 1px solid #000000;
                width: 300px;
                height: 250px;
                margin-left: 100px;
                margin-top: 20px;
            }
            .loaded-image-3{
                border: 1px solid #000000;
                width: 300px;
                height: 250px;
                margin-left: 100px;
                margin-top: 20px;
            }
            #my-image-1{
               width: 300px;
                height: 200px;
            }
            #my-image-2{
                width: 300px;
                height: 200px;
            }
            #my-image-3{
                width: 300px;
                height: 200px;
            }
            /*End dest*/
        </style>
        <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script>
            $(document).ready(function(){
               var select  = document.getElementById('city');
                select.onchange = function(){
                    var count;
                    var index = select.selectedIndex;
                    console.log(index);
                    var value = select.options[index].innerHTML;
                    console.log(value);
                    document.getElementById('suggestion-header').innerHTML = value;
                    $.get('/home/'+value,function(response){
                        if(response.success){
                            console.log(response.apartment);
                            var my_apartment_array = response.apartment ;
                            var loc1 = my_apartment_array[0].locality;
                            var loc2 = my_apartment_array[1].locality;
                            var loc3 = my_apartment_array[2].locality;


                            my_apartment_array.forEach(function(i){
                                 count++ ;
                            });
                            //var locality = response.apartment[0].locality;
                            document.getElementById('loaded-text-1').innerHTML = loc1;
                            document.getElementById('loaded-text-2').innerHTML = loc2;
                            document.getElementById('loaded-text-3').innerHTML = loc3;

                            var img1 = my_apartment_array[0].apt_image;
                            var img2 = my_apartment_array[1].apt_image;
                            var img3 = my_apartment_array[2].apt_image;

                            document.getElementById('my-image-1').setAttribute();
                            document.getElementById('my-image-2').setAttribute();
                            document.getElementById('my-image-3').setAttribute();
                        }
                    });
                }
            });
        </script>
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

            <!-- header -->
    <div class = "top-container">
        <div class = "top-left-container">
            <h1 class = "logo">AMS</h1>
        </div>
        <div class = "top-center-container">
        </div>
        <div class = "top-right-container">
            <ul id = "main">
                <li>
                    <a href = "">Log In</a>
                    <ul class = "sub">
                        <li>
                            <a href = "#myModal" role="button" data-toggle="modal" class = "login-sub">Owner</a>
                        </li>
                        <li>
                            <a href = "#myModal" role="button" data-toggle="modal" class = "login-sub">Tenant</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Header -->
    <!-- Main -->
    <div class="center-container">

        <div class = "filters">
            <h3 class = "tagline">Find your next Home with us.</h3>
            <button type = "button1"  onclick="window.location='{{ url("buy") }}'" class = "button1">Host</button>
            <button class = "button2">Rent</button>
            <div class = "glass">
                <div class = "form-filter">
                    {!! Form::open(['route' => 'test', 'method' => 'get']) !!}

                    {!! Form::select('city',['mumbai' => 'Mumbai','bangalore' => 'Bangalore','chennai' => 'Chennai','pune' => 'Pune','delhi' => 'Delhi','kolkatta' => 'Kolkatta'],null,['class' => 'city', 'id' => 'city']) !!}

                    {!! Form::text('locality',null,array('placeholder' => 'Search by Locality','class' => 'locality')) !!}

                    {!! Form::select('BHK',['1'=>'1 BHK','2'=>'2 BHK','3'=>'3 BHK','4'=>'4 BHK','5'=>'5 BHK'],null,['class' => 'bhk']) !!}

                    {!! Form::select('type',['apartment'=>'Apartment','bunglow'=>'Bunglow','villa'=>'Villa','castle'=>'Castle','lighthouse'=>'Lighthouse'],null,['class' => 'toa']) !!}

                    <input type="text" name="min_price" class = "min" placeholder="Min">
                    <input type="text" name="max_price" class = "max" placeholder="Max">


                    <button class = "search"> Search <i class="fa fa-search"></i></button>



                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

    <div id="txtHint"></div>

    <script>
        //function showCity() {
            //var x = document.getElementById("city").value;

            /*

            $.ajax({
                method: 'POST',
                url: urlLike,
                data: {x:x},
                success: function() {
                    console.log(x);
                }
            }); */

        //}
    </script>


    <!--<script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 7000);
        }
    </script>-->
    <!-- Login Modal -->



    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">

            <div class="modal-body">
                <span class="close">×</span>

                <div class = "form">
                    {!! Form::open([ 'method' => 'post']) !!}


                    {!! Form::text('email', null, array('required','placeholder' => 'Email Address','class' => 'myinput')) !!}

                    <br>

                    {!! Form::password('password', array('required','placeholder' => 'Password','class' => 'myinput')) !!}


                    {!! Form::submit('Log in',array('type' => 'button','class' => 'button')) !!}

                    <input type="hidden" name="_token" value="{{ Session::token() }}">

                    {!! Form::close() !!}
                </div>
            </div>

        </div>

    </div>

    <!-- top destinations -->
    <div class = "destinations">
        <div class = "text"><strong>Top Destinations</strong></div>
        <div class = "contain">
            <div align = "center" class = "category1">
                <img src = "img/mumbai.jpg">
                <div class="mumbai">Mumbai</div>
            </div>
            <div align = "center" class = "category2">
                <img src = "img/bangkok.jpg" id = "image">
                <div class="bangkok">Bangkok</div>
                <div class ="space"></div>
                <img src = "img/paris.jpg">
                <div class="paris">Paris</div>
            </div>
            <div align = "center" class = "category3">
                <img src = "img/greece.jpg">
                <div class="greece">Australia</div>
            </div>
        </div>
    </div>
    <!--End destinations -->
            <!--Suggestions-->
            <div class="suggestions">
                <h2>Top Collections in <span id="suggestion-header">Mumbai</span></h2>
                <div class="my-suggestions">
                    <div class="my-container">
                        <div class="loaded-image-1">
                            <img src="img/greece.jpg" id="my-image-1">
                            <div id="loaded-text-1"></div>
                        </div>
                    </div>
                    <div class="my-container">
                        <div class="loaded-image-2">
                            <img src="img/paris.jpg" id="my-image-2">
                            <div id="loaded-text-2"></div>
                        </div>
                    </div>
                    <div class="my-container">
                        <div class="loaded-image-3">
                            <img src="img/mumbai.jpg" id="my-image-3">
                            <div id="loaded-text-3"></div>
                        </div>
                    </div>
                </div>
            </div>
    <!--Youtube Video Links-->
            <div class="container" style="margin-top: 50px; margin-bottom: 50px">
                <div class="row" style="display:inline;">
                    <div class="col-md-6" style="display:inline; margin-right: 100px; margin-left: 120px">
                        <div class="video" style="display:inline;">
                            <iframe width="400" height="215" src="https://www.youtube.com/embed/kiWzJSu7JZ4" frameborder="2" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-6" style="display:inline; margin-right: 100px; margin-left: 120px">
                        <div class="video" style="display:inline;">
                            <iframe width="400" height="215" src="https://www.youtube.com/embed/N2Z4GGiaaRE" frameborder="2" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

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