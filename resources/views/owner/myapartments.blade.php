<html>
<head>
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src = "{{ URL::to('src/js/app.js') }}"></script>
    <style>
        body{
            overflow-x: hidden;
        }
        .apt-image{
            width: 100%;
            height: 69%;
        }
        .container{
            width: 88%;
            height: 117%;
            margin: auto;
            margin-bottom: -16%;
            margin-top: 3%;
        }
        .container2{
            width: 80%;
            color: white;
            margin-top: -28%;
            margin-left: 37%;
        }
        table{
            color: white;
            margin-left: -10%;
            width: 462px;
        }
        tr{
            height: 35px;
        }
        td{

        }
        .right{
            text-align: right;
        }
        .editpost{
            margin-left: 40%;
            margin-top: 4%
        }
        .edit{
            width: 16%;
            height: 5%;
            margin-right: 5%;
            color: #fff;
            border: 1px solid #fff;
            text-align: center;
            outline: none;
            text-decoration: none;
            color: black;

            font-size: 13px;
            text-transform: uppercase;
            font-weight: bold;

            opacity: 0.9;
        }
        .delete{
            width: 16%;
            height: 5%;

            color: #fff;
            border: 1px solid #fff;
            text-align: center;
            outline: none;
            text-decoration: none;
            color: black;

            font-size: 13px;
            text-transform: uppercase;
            font-weight: bold;

            opacity: 0.9;
        }
        .edit:hover,
        .edit:active {
            background-color: #fff;
            color: #000;
        }
        .delete:hover,
        .delete:active {
            background-color: #fff;
            color: #000;
        }
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

        <div class = "container2" data-apt_id = "{{ $apt->apt_id }}">
            <table>
                <tr>
                    <td>Locality :</td>
                    <td class ="right">{{ $apt->locality }}</td>
                </tr>
                <tr>
                    <td>City</td>
                    <td class ="right">{{ $apt->city }}</td>
                </tr>
                <tr>
                    <td>BHK</td>
                    <td class ="right">{{ $apt->BHK }}</td>
                </tr>
                <tr>
                    <td>Type of apartment</td>
                    <td class ="right">{{ $apt->type_of_apartment }}</td>
                </tr>
                <tr>
                    <td> Price </td>
                    <td class ="right">{{ $apt->price }}</td>
                </tr>

            </table>


        </div>
        <div class = "editpost">
            <button id = "edit-button-modal" class = "edit">Edit</button>
            <a href="{{ route('apt.delete', $apt->apt_id) }}"><button class = "delete">Delete</button></a>
        </div>
    </div>


    <div class = "modal" id = "edit-modal">
        <div class = "modal-content">
            <button type = "button" class="close" data-dismiss = "modal" id = "close-modal">x</button>
            <form>
                <input type = "text" id = "price-body" name = "price-body" placeholder="Price"><br><br>
                <input type="text"   id="locality-body" name="locality-body" placeholder="Locality"><br><br>
                <input type="text" id="bhk-body" name="bhk-body" placeholder="BHK"><br><br>
                <input type="text" id="city-body" name="city-body" placeholder="city"><br><br>
                <input type="text" id="type_of_apartment-body" name="type_of_apartment-body" placeholder="Type of Apartment"><br><br>
                <button id = "modal-save">Save</button>
            </form>
        </div>
    </div>
    <script>
        var token = '{{ Session::token() }}';
        var urlLike = '{{ route('edit') }}';
    </script>
    <script>
        var modal = document.getElementById('edit-modal');
        var btn = document.getElementById('edit-button-modal');
        var span = document.getElementById("close-modal");
        btn.onclick = function() {
            modal.style.display = "block";
        }
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
    </body>
@endforeach
</html>