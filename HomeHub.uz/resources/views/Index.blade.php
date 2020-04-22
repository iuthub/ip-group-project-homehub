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
            <button>Register</button>
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
            <button>Start</button>
        </div>

        @endsection
