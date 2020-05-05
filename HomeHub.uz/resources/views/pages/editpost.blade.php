@extends('main')

    @section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Edit Post</h1>
                    <hr>
                    <form>
                        <div class="form-group">
                            <label name="email">Title:</label>
                            <input id="title" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label name="Body">Body:</label>
                            <input id="body" name="body" class="form-control">
                        </div>

                        <input type="submit" value="Submit" class="btn btn-success">
                    </form>

                </div>
            </div>
    @endsection


