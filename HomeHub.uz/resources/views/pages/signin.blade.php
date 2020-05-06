@extends('main')

    @section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Login</h1>
                    <hr>
                    <form>
                        <div class="form-group">
                            <label name="email">Email:</label>
                            <input id="email" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label name="password">Password:</label>
                            <input id="password" name="password" class="form-control">
                        </div>

                        <input type="submit" value="Sign In" class="btn btn-success">
                    </form>

                </div>
            </div>
    @endsection


