<div class="jumbotron p-3 p-md-5 rounded custom-jumbotron text-center">

    <h4>User Profile</h4>

    <p class="text-center">{{$post->user->name}}</p>

    <p class="text-center">{{$post->user->email}}</p>

    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)

        <a href="/posts/{{$post->id}}/edit" class="btn show-edit-btn official-custom-btn">Edit Topic</a>

        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'delete-post-btn' ])!!}

            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete Topic', ['class' => 'btn btn-danger'])}}

        {!! Form::close() !!} 

        @endif
    @endif

</div>

<div class="jumbotron p-3 p-md-5 rounded custom-jumbotron text-center">

    <h4>Answer Topic</h4>

    <P>Click the button below to provide an answer to this question</P>

    <!-- Button trigger modal -->
    <a class="btn show-edit-btn official-custom-btn" type="button" role="button" data-toggle="modal" data-target="#exampleModalCenter">Submit Answer</a>

</div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">

            <div class="modal-header">

              <h5 class="modal-title" id="exampleModalLongTitle">Topic: <small>{{$post->title}}</small></h5>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

            </div>

            <div class="modal-body">
                    <!-- Taken From: Laravel Collective -->
                {!! Form::open(['action' => ['PostAnswersController@store', $post->id], 'method' => 'POST']) !!}

                    <div class="form-group">
                        {{Form::label('title', 'Answer Title')}}  
                        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}  
                    </div> 

                    <div class="form-group">
                        {{Form::label('body', 'Answer Body')}}  
                        {{Form::textarea('body', '', ['id' => 'article-ckeditor' ,'class' => 'form-control', 'placeholder' => 'Please Enter Your Post'])}}  
                    </div> 

                    {{Form::submit('Submit', ['class'=> 'btn official-custom-btn'])}}

                {!! Form::close() !!}

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>