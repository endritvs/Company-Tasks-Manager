

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
        shrink-to-fit=no">
  
   @include('layouts/include/assets-css')
  
    <!-- Favicon icon-->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico"> -->
  
    <!-- Libs CSS -->
  
  
  
    <title>Add User </title>
  </head>
  
  <body class="bg-light">
    <div id="db-wrapper">
      <!-- 1 nav -->
      @include('layouts/include/navbar')
  
      <div id="page-content">
        <div class="header @@classList">
          <!-- 2 nav -->
          @include('layouts/include/header-navbar')
        </div>
        <!-- Container fluid -->
        <div class="bg-primary pt-10 pb-21"></div>
        <div class="container-fluid mt-n22 px-6">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12 ">
              <!-- Page header -->
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0 text-white">Add User</h3>
                  </div>
                 
                </div>
              </div>
            </div>
      
        
  
          </div>
          <!-- row  -->
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <form class="row g-3 mt-5 p-5" method="POST" action="{{ route('adm.users.create') }}">
            @csrf
           <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Name</label>
              <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>
            <div class="col-md-6">
              <label for="password" class="form-label">Password</label>

              <div class="col">
                  <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

      
           
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Role</label>
              <input id="role" type="text" placeholder="Role" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>
              @error('role')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
               @enderror
            </div>        
            <div class="col-12">
              <button type="submit" class="btn btn-primary mt-2">{{ __('Create') }}</button>
            </div>
          </form>
      </div>
    </div>
  
  
  
    <!-- Scripts -->
    <!-- Libs JS -->
  
  @include('layouts/include/assets-js')
  
  </body>
  
  
  
  <!-- Mirrored from codescandy.com/dashui/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Mar 2022 12:03:44 GMT -->
  
  </html>