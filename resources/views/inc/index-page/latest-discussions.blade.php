<section class="row">

        <div class="col-sm-12 col-md-12">
        
            <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron">

                <h1 class="mb-4 text-center blue-text">Latest Discussions</h1>

                <h3 class="lead text-center">Sign up to the bpl messaging board to start engaging in powerful conversations</h3>
              
            </div>

        

            @if(count($posts) > 0)

            @foreach ($posts as $post)

                <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron main-homepage-jumbotron">
                    <h3><a class="" href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    {{-- This syntax allows the parsing of HTML --}}
                    <p class="lead">{!!Str::limit($post->body, 200, '... <a href="/posts/{{$post->id}}">( more ) </a>')!!}</p>
                    <strong><p>Topic Started {{$post->created_at->diffForHumans()}} by {{$post->user->name}}</p></strong>
                </div>
                
            @endforeach

            {{-- Creates Pagination --}}
            {{$posts->links()}}
        </div>
        @else

        <div class="col-sm-12 col-md-12">
        
            <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron">

            <h4>No Posts Found</h4>

            </div>

        </div>

        @endif


</section>