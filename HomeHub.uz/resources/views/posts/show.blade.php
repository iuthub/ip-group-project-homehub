@extends('layouts.app')

@section('content')
    <br>
    <a href="/" class="btn btn-primary">Go Back</a>
    <p></p>

    <br>
    <h1>{{$post->title}}</h1>
    <img src="/storage/cover_images/{{$post -> cover_image}}" style="width:100%">
    <br>
    <br>
    <div>
        {!!$post -> body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                <a href="{{ route('blogLikePost', ['id'=> $post->id]) }}"><img src="/images/like.png" class="like"> {{ count($post->likes) }} </a>
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'float-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                {!! Form::close() !!}
         @endif
    @endif


@endsection
