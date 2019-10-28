<div class="jumbotron p-3 p-md-5 rounded custom-jumbotron">

        <!-- Taken From: Laravel Collective -->
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

            <div class="form-group">
                {{Form::label('title', 'Topic Title')}}  
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}  
            </div> 

            <div class="form-group">
                {{Form::label('body', 'Topic Body')}}  
                {{Form::textarea('body', '', ['id' => 'article-ckeditor' ,'class' => 'form-control', 'placeholder' => 'Please Enter Your Post'])}}  
            </div> 
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>

            {{Form::submit('Submit', ['class'=> 'btn official-custom-btn'])}}

        {!! Form::close() !!}

</div>