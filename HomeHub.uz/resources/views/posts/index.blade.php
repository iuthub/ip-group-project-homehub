@extends('layouts.app')

@section('content')
 
    @if (count($posts) > 0)

    
        @foreach ($posts as $post)
            <div class="card card-body bg-light">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/cover_images/{{$post -> cover_image}}"  style="width:100%">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post -> created_at}}</small>
                    </div>

                </div>
                
            </div>
            <p></p>
        @endforeach
        {{$posts->links()}}
        
    @endif

@endsection