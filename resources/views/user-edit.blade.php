

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
        shrink-to-fit=no">
  
   @include('layouts/include/assets-css')
  
    <!-- Favicon icon-->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico"> -->
  
    <!-- Libs CSS -->
  
  
  
    <title>Edit User </title>
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
                    <h3 class="mb-0 text-white">Edit User</h3>
                  </div>
                  <div>
                    <a href="#" class="btn btn-white">Create New User</a>
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
          <form method="post" action="{{route('users.update',$user->id)}}" class="row g-3 mt-5 p-5" enctype="multipart/form-data">
            @if (session('statusU'))
            <div class="alert alert-success" role="alert">
                {{ session('statusU') }}
            </div>
        @elseif (session('errorUser'))
            <div class="alert alert-danger" role="alert">
                {{ session('errorUser') }}
            </div>
        @endif
           
            @csrf
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name="email" value="{{$user->email}}">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword4" name="password" value="{{$user->password}}">
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Name</label>
              <input type="text" class="form-control" id="inputEmail4" name="name" value="{{$user->name}}">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Role</label>
              <input type="text" class="form-control" id="inputPassword4" name="role" value="{{$user->role}}">
            </div>
            <div class="col-12">
              @if(!is_null($user->profile_photo_path))
              <img style="height: 100px; max-width: 250px; object-fit: cover" src="{{ asset($user->profile_photo_path) }}" alt="">
              @else
              <img style="height: 100px; max-width: 250px; object-fit: cover" src="{{ asset('profile_photo/No_Image.png') }}" alt="">
              @endif  
          </div>
          
            <div class="col-12">
              <br>
         
              <input style="margin-top: -25px; position: absolute " type="file"
              class="@error('profile_photo') is-invalid @enderror"
              name="profile_photo" value="{{ old('profile_photo') }}">
            </div>
         
       
       
        
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Update</button>
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