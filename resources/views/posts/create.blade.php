@extends('layouts.app')

@section('content')

    <div class="col-sm-12 col-md-12">

        <div class="jumbotron p-2 p-md-2.5 rounded custom-jumbotron">
            <h1 class="text-center">Start A Topic</h1>
        </div>

    </div>

    <div class="col-sm-12 col-md-12">

        <div class="jumbotron p-2 p-md-2.5 rounded custom-jumbotron">

            <!-- Taken From: Laravel Collective -->
            {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                <div class="form-group">
                    {{Form::label('title', 'Post Title')}}  
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}  
                </div> 

                <div class="form-group">
                    {{Form::label('body', 'Post Contents')}}  
                    {{Form::textarea('body', '', ['id' => 'article-ckeditor' ,'class' => 'form-control', 'placeholder' => 'Please Enter Your Post'])}}  
                </div> 

                <div class="form-group">
                    {{Form::file('cover_image')}}
                </div>

                {{Form::submit('Submit', ['class'=> 'btn official-custom-btn'])}}

            {!! Form::close() !!}

        </div>
        
    </div>

    
@endsection