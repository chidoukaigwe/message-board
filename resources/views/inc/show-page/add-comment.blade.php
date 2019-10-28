
<div class="card-body addComment" style="background:white; padding:1rem; margin:3% auto;">
        
    <form method="POST" action="/posts/{{$postAnswer->id}}/comments">

        {{ csrf_field() }}

            <div class="form-group">

                <textarea name="body" placeholder="Add your comment" class="form-control" required></textarea>

            </div>

            <div class="form-group">
                <button type="submit" class="btn official-custom-btn">Add Comment</button>
            </div>                

    </form>

    @include('errors.error')

</div>