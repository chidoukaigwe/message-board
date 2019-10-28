<div class="row">


    @if ( ! Auth::user() )
        
        <div class="col-sm-12 col-md-6">

            <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron">

                <h2 class="mb-4 text-center blue-text">Your go-to place to share powerful yet simple messages</h2>

                <h2 class="lead text-center mg-btm-4">Ask a question. Recieve Feedback. Action it</h2>

                <h2 class="lead text-center mg-btm-4">Start Conversations  with a real audience.</h2>

                <h2 class="lead text-center mg-btm-4">Identify powerful simple solutions to your problems.</h2>
                
            
            </div>

        </div>

            <div class="col-sm-12 col-md-6">

                <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron text-center">

                    <h2 class="mb-4 blue-text">Sign Up</h2>
                    
                    <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
        
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
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
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn official-custom-btn">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                </div>

            </div>

        @else

            <div class="col-sm-12 col-md-6">

                <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron">

                    <h2 class="text-center blue-text">Popular Topics</h2>
                
                </div>
        
            </div>

            <div class="col-sm-12 col-md-6">

                <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron">

                    <h2 class="text-center blue-text mg-btm-4">Archives</h2>

                    @include('inc.archives.archives-layer')

                </div>
        
            </div>
            

        @endif

    </div> <!-- End Of Row -->