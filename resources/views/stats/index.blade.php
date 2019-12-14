<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .content {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="full-height">
            <div class="content">
                <h1>Inventories stats</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Make</th>
                        <th scope="col">Model</th>
                        <th scope="col">Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stats as $stat)
                            <tr>
                                <td>{{$stat->make}}</td>
                                <td>{{$stat->model}}</td>
                                <td>{{$stat->total}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
