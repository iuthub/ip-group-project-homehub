@extends('layouts.app')

    @section('content')


        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Welcome to HomeHub</h1>
                    <p class="lead">Thank you for visiting our blog</p>
                    <p><a class="btn btn-primary btn-lg" href="/posts" role="button">Popular Post</a></p>
                </div>
            </div>
        </div> <!-- end of header .row -->


        <div class="row">


            <div class="col-md-8">


                @if (count($posts) > 0)
                @foreach ($posts as $post)

                <div class="jumbotron">

                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/cover_images/{{$post -> cover_image}}"  style="width:100%">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <p><small>Written on {{$post -> created_at}} by {{$post->user->name}}</small></p>
                        <a href="/posts/{{$post->id}}" class="btn btn-primary">Read More</a>
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>

                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}

                    </div>
                    <br>

                </div>


                </div>
                <hr>
                @endforeach
                {{$posts->links()}}
                @endif

            </div>

            <div class="col-md-3 col-md-offset-1 sidebar" >
                <div>
                     <h2> Sidebar</h2>
                </div>
            </div>
        </div>
    @endsection
