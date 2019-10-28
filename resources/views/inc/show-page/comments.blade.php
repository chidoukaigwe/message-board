@if(count($postAnswer->comments) > 0)

    @foreach ($postAnswer->comments as $comment)

        <p style="background:white; padding:.5rem;" class="rounded">
            {{$comment->body}} <strong class="ml-1" style="color:#07394B;"><small>{{$comment->user_name}}. {{$comment->created_at->diffForHumans()}}</small></strong>
        </p>

    @endforeach

@endif