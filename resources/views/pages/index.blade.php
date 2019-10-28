@extends('layouts.app')

    @section('content')

        @include('inc.index-page.intro')

        @if (! Auth::user())
            @include('inc.index-page.latest-discussions')
        @else
            @include('inc.index-page.latest-discussions-auth')
        @endif
        

    @endsection


