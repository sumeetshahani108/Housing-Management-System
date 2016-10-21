<!DOCTYPE html>
<html lang="en">
<head>
    <title>Apartment Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .my-container{
            margin-right: 0px;
            margin-left: 0px;
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    @foreach($my_apartment_details as $data)

        <div class="my-container">
            <div class="row">
                <img src="{{URL::asset('/img/log.jpg')}}" alt="profile Pic" height="450" width="1370">
            </div>
        </div>

        <div class="container">
            <div class="row0" style="color:grey">
                <div class="row">
                    <div class="col-md-2">Price</div>
                    <div class="col-md-3">Carpetarea</div>
                    <div class="col-md-2">Possession</div>
                    <div class="col-md-2">Locality</div>
                    <div class="col-md-3">City</div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row0" style="font-size:20px">
                <div class="row">
                    <div class="col-md-2">{{ $data->price }}</div>
                    <div class="col-md-3">{{ $data->carpet_area }}</div>
                    <div class="col-md-2">Possession </div>
                    <div class="col-md-2">{{ $data->locality }}</div>
                    <div class="col-md-3">{{ $data->city }}</div>
                </div>
            </div>
        </div>








        <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspUnit Details</h1><br>
        <div class="container">
            <div class="row1" style="color:grey">
                <div class="row">
                    <div class="col-md-2">Apartment Id</div>
                    <div class="col-md-3">Area</div>

                    <div class="col-md-2">Flooring</div>
                    <div class="col-md-3">Year of construction</div>
                </div>
            </div>
        </div><br>



        <div class="container">
            <div class="row2" style="font-size:20px" >
                <div class="row">
                    <div class="col-md-2">{{ $data->apt_id }}</div>
                    <div class="col-md-3"> Area </div>

                    <div class="col-md-2">{{ $data->flooring_type }}</div>
                    <div class="col-md-3">{{ $data->year_of_construction }}</div>
                </div>
            </div>
        </div>

        <div class="container">
            <hr></div>



        <div class="container">
            <div class="row3" style="color:grey">
                <div class="row">

                    <div class="col-md-3">Owner</div>
                    <div class="col-md-2">Condition</div>
                    <div class="col-md-2">No of bedrooms</div>
                    <div class="col-md-3">No of bathrooms</div>
                </div>
            </div>
        </div><br>




        <div class="container">
            <div class="row4" style="font-size:20px">
                <div class="row">
                    <div class="col-md-3">{{ $data->owner }}</div>
                    <div class="col-md-2">{{ $data->apt_condition }}</div>
                    <div class="col-md-2">{{ $data->no_of_bedrooms }}</div>
                    <div class="col-md-3">{{ $data->no_of_bathrooms }}</div>
                </div>
            </div>
        </div><br>
    @endforeach
</body>