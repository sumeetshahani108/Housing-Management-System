<html>
    <head>
        <style>
            .container{
                margin: auto;
                width: 60%;
                margin-top: 5%;
                border: 1px solid black;
            }
            table{
                margin: auto;
                height: 27%;
                border-collapse: collapse;
                padding-left: 89px;
            }
            tr{

            }
            th, td{
                width: 20%;
                border: 1px solid black;
                text-align: center;
            }

        </style>
    </head>
    <body>
        <div class = "container">
            <table>
                <tr>
                    <th>
                        Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Contact
                    </th>
                    <th>
                        Status
                    </th>
                </tr>
                @foreach($interested_details as $data )
                    <tr>
                        <td>
                            {{ $data->owner_first_name }} {{ $data->owner_last_name }}
                        </td>
                        <td>
                            {{ $data->owner_email }}
                        </td>
                        <td>
                            {{ $data->owner_contact }}
                        </td>
                        <td>
                            @if ($data->interested === 1)
                                Yes
                            @else
                                No
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>