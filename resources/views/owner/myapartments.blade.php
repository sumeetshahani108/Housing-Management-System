@extends('layouts.master')
<html>
    <head>
        <style>
            /*.apt-image{
                width: 100%;
                height: 63%;
            }
            .container{
                width: 80%;
                margin: auto;
                margin-top: 5%;
            }
            .container2{
                width: 80%;
                margin-top: -22%;
                margin-left: 42%;
            }
            .details{

            }*/
            /*Modal*/
            .modal {
                position: fixed;
                z-index: 1;
                padding-top: 40px;
                left: 23%;
                top: 13%;
                width: 53%;
                height: 65%;
                overflow: auto;
                background-color: rgb(0,0,0);
                background-color: rgba(0,0,0,0.4);
                display: none;
            }
            .modal-content {
                background-color: #fefefe;
                margin: auto;
                padding: 21px;
                height: 90%;
                border: 1px solid #888;
                width: 87%;
                -webkit-animation-name: animatetop;
                -webkit-animation-duration: 0.4s;
                animation-name: animatetop;
                animation-duration: 0.4s
            }
            .scroll{
                overflow: scroll;
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
        </style>
    </head>
    @foreach($apartment as $apt)
    <body>
        <div class = "container">
            <img src = "/img/{{ $apt->apt_image }}" class = "apt-image" >
            </div>
        <div class = "container2" data-apt_id = "{{ $apt->apt_id }}">
                <p>{{ $apt->price }}</p>
            <div class = "editpost">
                <button class = "edit">Edit</button>
                <button class = "delete">Delete</button>
            </div>
        </div>



    <div class = "modal" id = "edit-modal">
        <div class = "modal-content">
            <button type = "button" class="close" data-dismiss = "modal">x</button>
            <form>
                <input type = "text" id = "price-body" name = "price-body" placeholder="edit prices">
                <button id = "modal-save">Save</button>
            </form>
        </div>
    </div>
    <script>
        var token = '{{ Session::token() }}';
        var urlLike = '{{ route('edit') }}';
    </script>
    </body>
    @endforeach
</html>