<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
   

</head>


<body>
<div id="app">

    @include('inc.navbar')

    <div class="container">
        @include('inc.messages')
        @yield('content')

        <hr>

        <p class="text-center">Copyright HomeHub Team 2020 - All Rights Reserved</p>
    </div> <!--end of container -->


 
    
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}"></script>
</div>

</body>
</html>
