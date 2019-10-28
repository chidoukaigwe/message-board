
@extends('layouts.app')

@section('content')
 
    <div class="jumbotron p-2 p-md-2.5 rounded custom-jumbotron text-center">
        <h1>Archives</h1>
    </div>

    @if(count($posts) > 0)
        <div class="row">

            @foreach ($posts as $post)

            <div class="col-sm-12 col-md-6">
                <div class="jumbotron p-3 rounded custom-jumbotron text-center">
                    
                    <h4 class="mg-top-1"><a class="" href="/posts/{{$post->id}}">{{$post->title}}</a></h4>

                    <div class="posts-img-holder">
                        <a href="/posts/{{$post->id}}"><img src="/storage/cover_images/{{$post->cover_image}}" alt="" style="width:100%"></a>
                    </div>
                    
                    <p class="mg-top-1">Topic Started {{$post->created_at->diffForHumans()}} by {{$post->user->name}}</p>
                    
                </div>
            </div>
            
            @endforeach

        </div>
        

        {{-- <div class="col-sm-12 col-md-12"> --}}
            {{-- Creates Pagination --}}
            {{-- {{$posts->links()}} --}}
        {{-- </div> --}}
    @else

    <div class="col-sm-12 col-md-12">
        
        <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron">

            <h4>No Posts Found</h4>

        </div>

    </div>

    @endif
    
@endsection