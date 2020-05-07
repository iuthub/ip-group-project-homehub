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
                <div>
                    <div class="post">
                        <h3> Post Title 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam amet aperiam assumenda doloribus eligendi ex, id illum incidunt maiores necessitatibus nobis obcaecati quibusdam quidem rem sit vel veritatis voluptatibus.</p>
                        <a href="#" class="btn btn-primary"> Read More</a>
                    </div>

                    <hr>

                    <div class="post">
                        <h3> Post Title 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam amet aperiam assumenda doloribus eligendi ex, id illum incidunt maiores necessitatibus nobis obcaecati quibusdam quidem rem sit vel veritatis voluptatibus.</p>
                        <a href="#" class="btn btn-primary"> Read More</a>
                    </div>

                    <hr>

                    <div class="post">
                        <h3> Post Title 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam amet aperiam assumenda doloribus eligendi ex, id illum incidunt maiores necessitatibus nobis obcaecati quibusdam quidem rem sit vel veritatis voluptatibus.</p>
                        <a href="#" class="btn btn-primary"> Read More</a>
                    </div>

                    <hr>

                    <div class="post">
                        <h3> Post Title 4</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam amet aperiam assumenda doloribus eligendi ex, id illum incidunt maiores necessitatibus nobis obcaecati quibusdam quidem rem sit vel veritatis voluptatibus.</p>
                        <a href="#" class="btn btn-primary"> Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-md-offset-1">
                <div>
                     <h2> Sidebar</h2>
                </div>
            </div>
        </div>
    @endsection
