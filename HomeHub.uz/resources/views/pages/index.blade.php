@extends('layouts.app')

    @section('content')

   
    <div class="jumbotron p-3 p-md-5 text-black rounded bg-grey">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Welcome to HomeHub</h1>
          <p class="lead my-3">Thank you for visiting our blog</p>
          <a href="" class="btn btn-lg btn-primary">Popular Post</a>
        </div>
      </div>
 



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
                        <p><small>Written on {{$post -> created_at}}</small></p>
                        <a href="/posts/{{$post->id}}" class="btn btn-primary">Read More</a>

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
                    <h4 class="font-italic">Posts links: </h4>
                    <ol class="list-unstyled mb-0">
                        @foreach ($posts as $post)
                        <li><a href="posts/{{$post->id}}">{{$post->title}}</a></li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    @endsection
