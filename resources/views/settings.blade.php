
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts/include/assets-css')
    <title>Settings</title>
</head>
<body>
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        @include('layouts/include/navbar')
    
        <!-- page content -->
        <div id="page-content">
          <div class="header @@classList">
            <!-- navbar -->
    
            @include('layouts/include/header-navbar')
    
          </div>
          <!-- Container fluid -->
          <div class="container-fluid p-6">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
    
                <div class="border-bottom pb-4 mb-4">
                  <h3 class="mb-0 fw-bold">General</h3>
    
                </div>
    
              </div>
            </div>
            <div class="row mb-8">
              <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                <div class="mb-4 mb-lg-0">
                  <h4 class="mb-1">General Setting</h4>
                  <p class="mb-0 fs-5 text-muted">Profile configuration settings </p>
                </div>
    
              </div>
    
              <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                <!-- card -->
                <div class="card">
                  <!-- card body -->
                  <div class="card-body">
                    <div class=" mb-6">
                      <h4 class="mb-1">General Settings</h4>
    
                    </div>
                   
                    <!-- col -->
                  
                    <div>
                      <!-- border -->
                      <div class="mb-6">
                        <h4 class="mb-1">Basic information</h4>
                        
                      </div>
                      
                   
                      <form  method="post" action="{{route('settings.update',Auth::user()->id)}}" enctype="multipart/form-data">
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
                        <div class="mb-3 row">
                          <label for="fullName" class="col-sm-4 col-form-label
                              form-label">Full name</label>
                          <div class="col-sm-4 mb-3 mb-lg-0">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="First name" id="fullName" value="{{Auth::user()->name}}" >
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                          </div>
                          <div class="col-sm-4">
                            <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="Last name" id="lastName" value="{{Auth::user()->lastname}}" >
                            @error('lastname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                          </div>
                        </div>
    
                        <!-- row -->
                        <div class="mb-3 row">
                          <label for="email" class="col-sm-4 col-form-label
                              form-label">Email</label>
                          <div class="col-md-8 col-12">
                            <input type="email" class="form-control @error('lastname') is-invalid @enderror" name="email" placeholder="Email" id="email" value="{{Auth::user()->email}}" >
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                          </div>
                        </div>
                        <!-- row -->
                        <div class="mb-3 row">
                          <label for="phone" class="col-sm-4 col-form-label
                              form-label">Phone </label>
                          <div class="col-md-8 col-12">
                            <input type="text" class="form-control  @error('phone') is-invalid @enderror" name="phone" placeholder="Phone" id="phone" value="{{Auth::user()->phone}}" >
                            @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                          </div>
                        </div>
                        <!-- row -->
                        <div class="mb-3 row">
                          <label for="location" class="col-sm-4 col-form-label
                              form-label">Location</label>
    
                          <div class="col-md-8 col-12">
                            <input type="text" class="form-control  @error('location') is-invalid @enderror" name="location" placeholder="Location" id="location" value="{{Auth::user()->location}}" >
                            @error('location')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                         
                          <input type="hidden" class="form-control" id="inputPassword4" name="role" value="{{Auth::user()->role}}">
                        </div>
                        <!-- row -->
                        <div class="mb-3 row">
                          <label for="addressLine" class="col-sm-4 col-form-label
                              form-label">Address line </label>
    
    
                          <div class="col-md-8 col-12">
                            <input type="text" class="form-control  @error('location') is-invalid @enderror" name="address" placeholder="Address " id="addressLine" value="{{Auth::user()->address}}" >
                            @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                          </div>
                        </div>
                        <!-- row -->
                        <div class="mb-3 row">
                          <label for="addressLineTwo" class="col-sm-4
                              col-form-label form-label">Profile Photo</label>
                          <div class="col-md-8 col-12">
                            @if(!is_null(Auth::user()->profile_photo_path))
                                  <img style="height: 100px; max-width: 250px; object-fit: cover" src="{{ asset(Auth::user()->profile_photo_path) }}" alt="">
                                  @else
                                  <img style="height: 100px; max-width: 250px; object-fit: cover" src="{{ asset('profile_photo/No_Image.png') }}" alt="">
                                  @endif 
                                  <input   type="file"
                                  class="mt-2 form-control @error('profile_photo') is-invalid @enderror"
                                  name="profile_photo" value="{{ old('profile_photo') }}">
                                  @error('profile_photo')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                        </div>

                                      <div class="mb-3 row">
                                        <label for="addressLine" class="col-sm-4 col-form-label
                                            form-label">Position </label>
                  
                  
                                        <div class="col-md-8 col-12">
                                          <input type="text" class="form-control  @error('position') is-invalid @enderror" name="position" placeholder="Position " id="position" value="{{Auth::user()->position}}" >
                                          @error('position')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                        </div>
                                      </div>

                                      <div class="mb-3 row">
                                        <label for="addressLine" class="col-sm-4 col-form-label
                                            form-label">Bio </label>
    
    
                          <div class="col-md-8 col-12">
                            <textarea type="textarea" class="form-control  @error('bio') is-invalid @enderror" name="bio" placeholder="Bio " id="bio"  >{{Auth::user()->bio}}</textarea>
                            @error('bio')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                          </div>
                        </div>
                        <!-- row -->
                        <div class="row align-items-center">
                          <label for="zipcode" class="col-sm-4 col-form-label
                              form-label">Zip Code <i data-feather="info" class="me-2 icon-xs"></i></label>
    
                          <div class="col-md-8 col-12">
                            <input type="number" class="form-control" name="zipcode" placeholder="Zip Code" id="zipcode" value="{{Auth::user()->zipcode}}" >
                          </div>
                          <div class="offset-md-4 col-md-8 mt-4">
                            <button type="submit" class="btn btn-primary"> Save
                              Changes</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
    
              </div>
            </div>
            <div class="row mb-8">
              <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                <div class="mb-4 mb-lg-0">
                  <h4 class="mb-1">Email Setting</h4>
                  <p class="mb-0 fs-5 text-muted">Add an email settings to profile </p>
                </div>
    
              </div>
    
              <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                <!-- card -->
                <div class="card" id="edit">
                  <!-- card body -->
                  <div class="card-body">
                    <div class="mb-6">
                      <h4 class="mb-1">Email</h4>
    
                    </div>
                    {{-- <div id="app1">
                      @include('flash-messages')
              
              
                      @yield('content')
                  </div> --}}
                    <form  method="post" action="{{route('settings.email',Auth::user()->id)}}" enctype="multipart/form-data">
                      <!-- row -->
                      @csrf
                      <div class="mb-3 row">
                        @if (session('statusE'))
                        <div class="alert alert-success" role="alert">
                            {{ session('statusE') }}
                        </div>
                    @elseif (session('errorEmail'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('errorEmail') }}
                        </div>
                    @endif
                        <!-- label -->
                        <label for="newEmailAddress" class="col-sm-4
                            col-form-label form-label">New email</label>
                        <div class="col-md-8 col-12">
                          <!-- input -->
                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"  id="newEmailAddress" value="{{Auth::user()->email}}" >
                          @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                        <!-- button -->
                        <div class="offset-md-4 col-md-8 col-12 mt-3">
                          <button type="submit" class="btn btn-primary">Save Changes
                            </button>
                        </div>
                      </div>
                    </form>
    
                    <div class="mb-6 mt-6">
                      <h4 class="mb-1">Change your password</h4>
    
                    </div>
                    <form method="post" action="{{route('settings.password')}}" enctype="multipart/form-data">
                      <!-- row -->
                      @csrf
                      <div class="mb-3 row">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @elseif (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                        <label for="currentPassword" class="col-sm-4
                            col-form-label form-label">Current password</label>
    
                        <div class="col-md-8 col-12">
                          <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" placeholder="Enter Current password" id="currentPassword" >
                          @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                      </div>
                      <!-- row -->
                      <div class="mb-3 row">
                        <label for="currentNewPassword" class="col-sm-4
                            col-form-label form-label">New password</label>
    
                        <div class="col-md-8 col-12">
                          <input name="new_password" type="password" class="form-control  @error('new_password') is-invalid @enderror" placeholder="Enter New password" id="currentNewPassword" >
                          @error('new_password')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                        
                        </div>
                      </div>
                      <!-- row -->
                      <div class="row align-items-center">
                        <label for="confirmNewpassword" class="col-sm-4
                            col-form-label form-label">Confirm new password</label>
                        <div class="col-md-8 col-12 mb-2 mb-lg-0">
                          <input name="new_password_confirmation" type="password" class="form-control" placeholder="Confirm new password" id="confirmNewpassword" >
                        </div>
                        <!-- list -->
                        <div class="offset-md-4 col-md-8 col-12 mt-4">
                          <h6 class="mb-1">Password requirements:</h6>
                          <p>Ensure that these requirements are met:</p>
                          <ul>
                            <li> Minimum 8 characters long the more, the better</li>
                            <li>At least one lowercase character</li>
                            <li>At least one uppercase character</li>
                            <li>At least one number, symbol, or whitespace character
                            </li>
                          </ul>
                          <button type="submit" class="btn btn-primary">Save
                            Changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
    
    
    
            <!-- 12222222222222-->
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                <div class="mb-4 mb-lg-0">
                  <h4 class="mb-1">Delete Account</h4>
                  <p class="mb-0 fs-5 text-muted">Easily set up social media accounts</p>
                </div>
    
              </div>
    
              <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                <!-- card -->
    
                <div class="card mb-6">
                  <!-- card body -->
                  <div class="card-body">
                    <div class="mb-6">
                      <h4 class="mb-1">Danger Zone </h4>
    
                    </div>
                    <div>
                      <!-- text -->
                      <p>Delete any and all content you have, such as articles, comments, your reading list or chat messages. Allow your username to become available to anyone.</p>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Delete Account
                      </button>
                      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel">Delete my account</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                             Are you sure you want to delete your account?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                              <a class="btn btn-danger" href="{{route('settings.accountD',$user->id)}}">Delete</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('layouts/include/assets-js')
</body>
</html>