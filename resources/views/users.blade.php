@php
    use App\Person;
    $persons = Person::all();
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Datatable</title>
        {{-- C:\xampp\htdocs\Laravel\API_MVC\node_modules\bootstrap\dist\css\bootstrap.css --}}
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="/css/app.css" rel="stylesheet">

        <script src="/js/app.js"></script>
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

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .center {
                margin: auto;
                margin-top: 50px;
                width: 50%;
                border: 3px solid;
                padding: 10px;
            }
        </style>
    </head>
<body>

    <div id="app">

        <main class="py-4">
            <table border='1' class="center">
                <caption><b>Users</b></caption>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Created At</th>
                </thead>
                @foreach ($persons as $person)
                    <tr>
                        <td>{{ $person['id'] }}</td>
                        <td>{{ $person['name'] }}</td>
                        <td>{{ $person['email'] }}</td>
                        <td>{{ $person['age'] }}</td>
                        <td>{{ $person['created_at'] }}</td>
                    </tr>
                @endforeach
            </table>
        </main>
    </div>

</body>
</html>