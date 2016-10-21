<!--Include all the required header files in master.blade.php-->

<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <!--Required CSS files : bootstrap, style.min.css, font-awesome-icons -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->
        <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
    </head>
    <body>

        <div class="container">
            @yield('content')
        </div>

        <!--JS Files-->
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>