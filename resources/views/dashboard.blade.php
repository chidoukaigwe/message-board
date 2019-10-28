@extends('layouts.app')

@section('content')

    <div class="row">

        @include('inc.dashboard.session-msg')

        @include('inc.dashboard.admin-panel')

        <div class="col-sm-12 col-md-9">

            <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron">
                
                <h2 class="text-center mg-btm-6">Dashboard</h2>

                @if (count($posts) > 0)
                    
                    <h3>Your Topics Posts</h3>
                        
                    <table class="table table-striped">

                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td class="d-flex align-items-center">

                                    <a href="/posts/{{$post->id}}">{{$post->title}}</a>

                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-sm official-custom-btn ml-4 mr-2">Edit</a>

                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => ''])!!}

                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-sm btn-danger'])}}
                        
                                    {!! Form::close() !!} 
                                
                                </td>
                            </tr>
                        @endforeach

                    </table>
                @else

                    <p class="text-center lead">Start Your First Topic</p>
                
            </div> <!-- End Of Dashboard Jumbotron -->

            @include('inc.dashboard.first-topic-form')

            @endif

        </div> <!-- End Of Main Col-9 -->

           

        </div> <!-- End Of Row -->

@endsection
