@extends('layouts.app')

    @section('content')

    <div class="row mg-top-6">

            <div class="col-sm-12 col-md-12">

                <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron text-center">

                    <h2 class="mb-4 blue-text">You must be logged in to access all the features.</h2>

                </div>

            </div>

        <div class="col-sm-12 col-md-6">

            <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron">

                <h2 class="mb-4 text-center mg-btm-6 blue-text">Your go-to place to share powerful yet simple messages</h2>
        
                <h2 class="lead text-center mg-btm-6">Ask a question. Recieve Feedback. Action it</h2>
        
                <h2 class="lead text-center mg-btm-6">Start Conversations  with a real audience.</h2>
        
                <h2 class="lead text-center mg-btm-6">Identify powerful simple solutions to your problems.</h2>
                           
            </div>

        </div>

        <div class="col-sm-12 col-md-6">

            <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron">
                <h2 class="mb-4 blue-text text-center">Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary official-custom-btn">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form> <!-- End Of Login Form -->

                <p class="mg-top-6">
                    <a href="/register" id="globalAuthPageSignUp" style="text-decoration: underline !important;">Sign Up With Email</a>. By signing up you indicate that you agree to BPl Message Board's Terms of Service and acknowledge BPL Message Boards's Privacy Policy.
                </p>
                
            </div> <!-- End Of Jumbotron  -->
        
        </div> 
            
    </div> <!-- End Of Row -->
        
    @endsection


