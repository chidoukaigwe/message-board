<div class="text-center show-posts-img-holder">
    <img class="text-center" src="/storage/cover_images/{{$post->cover_image}}" alt="">
</div>
    
{{-- This syntax allows the parsing of HTML --}}
<p class="lead">{!!$post->body!!}</p>

<div>
    <small>Topic Started {{$post->created_at->diffForHumans()}} by {{$post->user->name}}</small>
</div>