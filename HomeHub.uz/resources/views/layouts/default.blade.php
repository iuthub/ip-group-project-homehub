<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Document</title>
</head>
<body>
        <div class="container-0">

             <p><a href="{{route('/')}}" >HomeHub</a> <a href="{{route('list')}}">List</a>   <a href="{{route('reg')}}">Join Us</a> <a href="{{route('author_list')}}">Settings</a>, <a href="{{route('about_us')}}">About</a>
                </p>

                </div>

        @yield('content')


        <div class="container-3">
             <p>HomeHub Team 2020</p>
                </div>
</body>
</html>
