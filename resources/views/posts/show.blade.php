@extends('layouts.app')

@section('content')
 
    <div class="row">

        <div class="col-sm-12 col-md-3">
            <div class="mg-btm-2 show-post-btn-holder">
                <a id="goBack" class="btn btn btn-light" role="button" style="padding: .6rem;">Go Back</a>
            </div>
        </div>

        <div class="col-sm-12 col-md-9">
            <h3 class="rounded text-center" style="background:white; padding: .5rem;">{{$post->title}}</h3>
        </div>

    </div>

    <div class="row">
    
        <div class="col-sm-12 col-md-3">

           @include('inc.show-page.sidebar')

        </div> <!-- End Of User Profile Col -->
        
        <div class="col-sm-12 col-md-9">
            
            <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron">

              @include('inc.show-page.main-post')
                
            </div> <!-- End Of Topic Post -->

        </div> <!-- End Of Topic Post Col -->

    </div> <!-- End Of Main Page Row -->

    <div class="row"> <!-- Start Of Answer Section Row -->

       @include('.inc.show-page.answers')

    </div> <!-- End Of Answer Section Row -->

@endsection