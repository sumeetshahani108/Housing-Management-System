<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Apartment Details</title>
        <meta charset="utf-8">
        <meta name="viewport" content="widtd=device-widtd, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            body{
                background-repeat: no-repeat;
                background-size: 100% 400px;
            }
            .container1{
                background-color: white;
                border: 1px solid #f5f5f5;
                margin-left: 5%;
                height: 124px;
                margin-right: 36%;
                margin-top: 28%;
                box-shadow: 10px 10px 5px #888888;
            }

            table{
                margin-top: 4%;
                font-size: 19px;
                width: 102%;
                margin-left: 4%;
            }
            tr{

            }
            .head{
                color: darkgrey;
                font-family: serif;
                font-size: 21px;
                width: 10%;
            }
            td{

            }

            .container2{
                background-color: white;
                border: 1px solid #f5f5f5;
                margin-left: 5%;
                height: 369px;
                margin-right: 36%;
                margin-top: 3%;
                box-shadow: 10px 10px 5px #888888;
            }
            .text{
                margin-left: 4%;
                margin-top: 3%;
                font-size: 37px;
            }
            .container3{
                border: 1px solid #f5f5f5;
                width: 307px;
                margin-left: 71%;
                margin-top: -39.5%;
                height: 534px;
                background-color: white;
                box-shadow: 10px 10px 5px #888888;
            }
            .inner-container{
                width: 300px;
                height: 200px;
                margin-top: 7%;
                margin-left: 10%;
            }
            .owner-details{
                font-size: 37px;
            }
            .name{
                height: 106px;
                margin-top: 8%;
            }
            .email{
                height: 106px;
            }
            .contact{
                height: 106px;
            }
            .deets{
                font-size: 35px;
                color: darkgrey;
                font-family: serif;
            }
            .container4{
                margin: 4% 6% 4% 5%;
            }
            .book{
                height: 50px;
                line-height: 48px;
                border: 2px solid #ff5a5f;
                background: #ff5a5f;
                color: #fff;
                width: 100%;
                font-size: 11px;
                text-transform: uppercase;
                font-weight: bold;
                letter-spacing: 1px;
            }

            .modal {
                display: none;
                position: fixed;
                z-index: 1;
                padding-top: 40px;
                left: 23%;
                top: 13%;
                width: 53%;
                height: 51%;
                overflow: auto;
                background-color: rgb(0,0,0);
                background-color: rgba(0,0,0,0.4);
            }
            .modal-content {
                background-color: #fefefe;
                margin: auto;
                padding: 21px;
                height: 86%;
                border: 1px solid #888;
                width: 87%;
            }
            .checkin{

            }
            .checkout{
                
            }
            .close {
                color: #aaaaaa;
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
    @foreach($my_apartment_details as $data)
        <body background="{{URL::asset('/img/log.jpg')}}">
            <div class = "container1">
                <table>
                    <tr>
                        <td class = "head">Price</td>
                        <td class = "head">Carpet Area</td>
                        <td class = "head">Possession</td>
                        <td class = "head">Locality</td>
                    </tr>
                    <tr>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->carpet_area}}</td>
                        <td>{{ $data->year_of_construction }}</td>
                        <td>{{ $data->locality }}</td>
                    </tr>
                </table>
            </div>
            <div class = "container2">
                <div class = "text"> Unit Details</div>
                <table class = "table2">
                    <tr>
                        <td class = "head">Condition</td>
                        <td class = "head">Flooring-type</td>
                        <td class = "head">BHK</td>
                        <td class = "head">Listed by</td>
                    </tr>
                    <tr>
                        <td>{{ $data->apt_condition }}</td>
                        <td>{{ $data->flooring_type }}</td>
                        <td>{{ $data->BHK }}</td>
                        <td>{{ $data->owner }}</td>
                    </tr>
                </table>
                <table class = "table3">
                    <tr>
                        <td class = "head">Bathrooms</td>
                        <td class = "head">Bedrooms</td>
                        <td class = "head">Type</td>
                        <td class = "head">City</td>
                    </tr>
                    <tr>
                        <td>{{ $data->no_of_bathrooms }}</td>
                        <td>{{ $data->no_of_bedrooms }}</td>
                        <td>{{ $data->type_of_apartment }}</td>
                        <td>{{ $data->owner }}</td>
                    </tr>
                </table>
                <table class = "table4">
                    <tr>
                        <td class = "head">Rules and Regulations</td>
                    </tr>
                    <tr>
                        <td>(rules regs from owner acc)</td>
                    </tr>
                </table>
            </div>
            <div class = "container3">
                <div class = "inner-container">
                    <div class = "owner-details">
                        Owner Details
                    </div>
                    <table class = "name">
                        <tr>
                            <td class = "deets">Name</td>
                        </tr>

                        <tr>
                            <td>(owner-name)</td>
                        </tr>
                    </table>
                    <table class = "email">
                        <tr>
                            <td class = "deets">Email</td>
                        </tr>
                        <tr>
                            <td>(owner-email))</td>
                        </tr>
                    </table>
                    <table class = "contact">
                        <tr>
                            <td class = "deets">Contact</td>
                        </tr>
                        <tr>
                            <td>(owner-contact)</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class = "container4">
                <button id="booking-modal-button" class = "book">book</button>
            </div>

            <div id="booking-modal" class="modal">
                <div class="modal-content">
                    <span class="close">x</span>
                    <form method="post" action="{{ route('booking.apt',$data->apt_id) }}" enctype="multipart/form-data">
                        <input type="date" name="start-date" class = "checkin">
                        <input type="date" name="end-date" class = "checkout">

                        <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                        <button type = "submit" name = "submit" class = "btn-style" id = "submit">Submit</button>
                    </form>
                </div>
            </div>
        <script>
            $(document).ready(function(){
                var modal = document.getElementById('booking-modal');

                var btn = document.getElementById("booking-modal-button");

                var span = document.getElementsByClassName("close")[0];

                btn.onclick = function() {
                    modal.style.display = "block";
                }

                span.onclick = function() {
                    modal.style.display = "none";
                }

                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            });
        </script>
        </body>
    @endforeach
</html>