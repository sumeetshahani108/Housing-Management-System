<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "<?php echo asset('css/maps.css')?>">
        <!--We usually place the google maps API below jQuery-->

        <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdK47smPDiN12eZnoGifSi2KHzrpPGKTg&libraries=places" async defer></script>
        <script src="{{ asset('js/script.js') }}"></script>
    </head>

    <body>
        <div class="container">
            <div id="map" style="width:400px;height:400px;background:yellow">

            </div>
        </div>


    </body>

</html>