<section class="row">

        <div class="col-sm-12 col-md-12">
        
            <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron">

                <h1 class="mb-4 text-center blue-text">Latest Discussions</h1>

                @if(count($posts) > 0)

                    @foreach ($posts as $post)
            
                        <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron main-homepage-jumbotron" style="background:#f7fbfb">
                            <h3><a class="" href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            {{-- This syntax allows the parsing of HTML --}}
                            <p class="lead">{!!Str::limit($post->body, 200, '...(more)')!!}</p>
                            <strong><p>Topic Started {{$post->created_at->diffForHumans()}} by {{$post->user->name}}</p></strong>
                        </div>
            
                    @endforeach

                    {{-- Creates Pagination --}}
                    {{$posts->links()}}

                </div>

            </div>

        @else

            <div class="col-sm-12 col-md-12">
        
                <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron">
    
                <h4>No Posts Found</h4>
    
                </div>
    
            </div>

        @endif

</section>