@extends('layouts.default')

        @section('content')

        <!--Login/Registration-->
        <div class="container-1">
            <form method="POST">
                @csrf
                <input type="text" id="username" value="username">
                <input type="password" id="password" value="">
                <input type="submit" value="Login">
            </form>
            <button><a class="btn" href="{{route('reg')}}" role="button">Register</a></button>
            <br>
        </div>



        <!--content of Index page-->
        <div class="container-2">
            <p>
                Some picture
            </p>
            <p>
                Some pafos text
            </p>
            <a class="btn btn-default" href="{{route('list')}}" role="button">Start</a>
        </div>

        @endsection
