<!DOCTYPE html>
<html>
    <head>
        <style>
            .container1{
                margin: 4% 6% 4% 5%;
            }
            .view-my-apts{
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
            .create-new-apts{
                height: 50px;
                line-height: 48px;
                border: 2px solid #449fdb;
                background: #449fdb;
                color: #fff;
                width: 100%;
                font-size: 11px;
                text-transform: uppercase;
                font-weight: bold;
                letter-spacing: 1px;
            }
            .logout{
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
        </style>
    </head>

    <body>
    <div class = "container1">
        <a href="{{ route('get.owner.apartments') }}"><button id="modal-button" class = "view-my-apts">View my Apartments</button></a><br><br><br>
        <a href="{{ route('create.apt') }}"><button id="modal-button" class = "create-new-apts">Create New Apartment</button></a><br><br>
        <a href="{{ route('user.logout') }}"><button id="modal-button" class = "logout">Log out</button></a>
    </div>
    </body>
</html>