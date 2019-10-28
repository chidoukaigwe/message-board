@if(count($post->postAnswers) > 0)

    <div class="col-sm-12 offset-md-3 col-md-9">

        <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron">

            <h3 class="text-center mg-btm-4">Answers</h3>

            @foreach ($post->postAnswers as $postAnswer)

                <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron main-homepage-jumbotron" style="background:#f7fbfb">

                    <h5>{{$postAnswer->title}}</h5>

                    <p>
                        {!!$postAnswer->body!!}
                        <strong>Answered By {{$postAnswer->user_name}}</strong>
                        {{$postAnswer->created_at->diffForHumans()}}
                    </p>

                    @include('inc.show-page.comments')

                    @include('inc.show-page.add-comment')

                    {{-- <button class="btn btn-sm official-custom-btn mg-btm-2 mg-top-2 addCommentToggleBtn">Add A Comment</button> --}}

                </div>

            @endforeach

        </div> <!-- End Of Post Answer Display Jumbotron -->

    </div>

@endif