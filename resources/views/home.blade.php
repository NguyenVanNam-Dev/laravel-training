<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <div class="header" style="width: 100%; background-color: aqua; height: 100px">
        <h1>Header</h1>
        <a href="/">Home page</a>
        <a href="{{ route('customers')  }}">View customer list</a>
        <a href="{{ route('about-us') }}">Go about us</a>
    </div>
    <h1>{{$pageTitle}}</h1>
    @yield('content')
    <div class="footer" style="width: 100%; background-color: #9ca3af; height: 100px">
        <h1>Footer</h1>
        <a href="{{ route('about-us') }}">Link to about us</a>
    </div>
</body>
</html>
