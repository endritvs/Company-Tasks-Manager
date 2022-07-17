<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts/include/assets-css')
    <title>Sign Up</title>
</head>
<body>
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0
            min-vh-100">
          <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
            <!-- Card -->
            <div class="card smooth-shadow-md">
              <!-- Card body -->
              <div class="card-body p-6">
                <div class="mb-4">
                  <a href=""><img src="assets/images/brand/logo/logo-primary.svg" class="mb-2" alt=""></a>
                  <p class="mb-6">Please enter your user information.</p>
    
                </div>
                <!-- Form -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="row row-form-label ms-1">{{ __('Name') }}</label>

                        <div class="col">
                            <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="row row-form-label ms-1">{{ __('Email Address') }}</label>

                        <div class="col">
                            <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="row row-form-label ms-1">{{ __('Password') }}</label>

                        <div class="col">
                            <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm" class="row row-form-label ms-1">{{ __('Confirm Password') }}</label>

                        <div class="col">
                            <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="row ms-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                        <div class="d-md-flex justify-content-between mt-4">
                            <div class="mb-2 mb-md-0">
                              <a href="login" class="fs-5">If you are a 
                                member? Login </a>
                            </div>
                          
          
                          </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('layouts/include/assets-js')
</body>
</html>