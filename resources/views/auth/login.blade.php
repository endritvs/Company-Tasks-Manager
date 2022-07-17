



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts/include/assets-css')

    <title>Sign in</title>
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
                  <a href="#"><img src="assets/images/brand/logo/logo-primary.svg" class="mb-2" alt=""></a>
                  <p class="mb-6">Please enter your user information.</p>
                </div>
                <!-- Form -->
                <form method="POST" action="{{ route('login') }}">
                  <!-- Username -->
                  @csrf
                  <div class="mb-3">
                    <label for="email" class="form-label">Username or email</label>
                    <input type="email" id="email" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="Email address here" required="">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                </div>
                  <!-- Password -->
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="**************" required="">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror  
                
                
                </div>
                  <!-- Checkbox -->
                  <div class="d-lg-flex justify-content-between align-items-center
                      mb-4">
                    <div class="form-check custom-checkbox">
                      <input type="checkbox" class="form-check-input" id="rememberme">
                      <label class="form-check-label" for="rememberme">Remember
                        me</label>
                    </div>
                    
    
                  </div>
                  
                
                  <div>
                    <!-- Button -->
                    <div class="d-grid">
                      <button type="submit" class="btn btn-primary">Sign
                        in</button>
                    </div>
                    {{-- <div class="d-md-flex justify-content-between mt-4">
                        <div class="mb-2 mb-md-0">
                          <a href="register" class="fs-5">Not a
                            member? Register </a>
                        </div> --}}
                      
      
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