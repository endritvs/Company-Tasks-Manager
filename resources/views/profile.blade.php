<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts/include/assets-css')
    <title>Profile</title>
</head>
<body>
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        @include('layouts/include/navbar')
        <!-- Page content -->
        <div id="page-content">
          <div class="header @@classList">
            <!-- navbar -->
            <!-- KODI PER HEADER NAVBAR -->
            @include('layouts/include/header-navbar')
          </div>
          <!-- Container fluid -->
          <div class="container-fluid p-6">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
    
                <div class="border-bottom pb-4 mb-4 ">
    
                  <h3 class="mb-0 fw-bold">Overview</h3>
    
    
                </div>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <!-- Bg -->
                <div class="pt-20 rounded-top" style="background:
                    url('{{asset('assets/images/background/profile-cover.jpg')}}') no-repeat;
                    background-size: cover;">
                </div>
                <div class="bg-white rounded-bottom smooth-shadow-sm ">
                  <div class="d-flex align-items-center justify-content-between
                      pt-4 pb-6 px-4">
                    <div class="d-flex align-items-center">
                      <!-- avatar -->
                      <div class="avatar-xxl avatar-indicators avatar-online me-2
                          position-relative d-flex justify-content-end
                          align-items-end mt-n10">
                          @auth
                          @if(!is_null(Auth::user()->profile_photo_path))
                          <img  class="avatar-xxl
                          rounded-circle border border-4 border-white-color-40" src="{{asset(Auth::user()->profile_photo_path)}}" alt="">
                          @else
                          <img  class="avatar-xxl
                          rounded-circle border border-4 border-white-color-40" src="{{ asset('profile_photo/No_Image.png') }}" alt="">
                          @endif  
                        @endauth
                        {{-- <img src="assets/images/avatar/avatar-1.jpg" class="avatar-xxl
                            rounded-circle border border-4 border-white-color-40" alt=""> --}}
                        <a href="#!" class="position-absolute top-0 right-0 me-2" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Verified">
                          <img src="{{ asset('assets/images/svg/checked-mark.svg')}}" alt="" height="30" width="30">
                        </a>
                      </div>
                      <!-- text -->
                      <div class="lh-1">
                        <h2 class="mb-0"> {{ ucfirst(Auth::user()->name) }}
                          <a href="#!" class="text-decoration-none" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Beginner">
    
                          </a>
                        </h2>
                        <p class="mb-0 d-block"><span>@</span>{{ ucfirst(Auth::user()->name) }}</p>
                      </div>
                    </div>
                    <div>
                      
                      <a href="{{route('settings.edit',Auth::user()->id)}}" class="btn btn-outline-primary
                          d-none d-md-block">Edit Profile</a>
                    </div>
                  </div>
                  <!-- nav -->
                  <ul class="nav nav-lt-tab px-4" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Overview</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- content -->
            <div class="py-6">
              <!-- row -->
              <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-6">
                  <!-- card -->
                  <div class="card">
                    <!-- card body -->
                    <div class="card-body">
                      <!-- card title -->
                      <h4 class="card-title">About Me</h4>
                      <span class="text-uppercase fw-medium text-dark
                          fs-5 ls-2">Bio</span>
                      <!-- text -->
                      <p class="mt-2 mb-6">{{Auth::user()->bio}}
                      </p>
                      <!-- row -->
                      <div class="row">
                        <div class="col-12 mb-5">
                          <!-- text -->
                          <h6 class="text-uppercase fs-5 ls-2">Position
                          </h6>
                          <p class="mb-0">{{Auth::user()->position}}</p>
                        </div>
                        <div class="col-6 mb-5">
                          <h6 class="text-uppercase fs-5 ls-2">Phone </h6>
                          <p class="mb-0">{{Auth::user()->phone}}</p>
                        </div>
                        <div class="col-6 mb-5">
                          <h6 class="text-uppercase fs-5 ls-2">Address </h6>
                          <p class="mb-0">{{Auth::user()->address}}</p>
                        </div>
                        <div class="col-6">
                          <h6 class="text-uppercase fs-5 ls-2">Email </h6>
                          <p class="mb-0">{{Auth::user()->email}}</p>
                        </div>
                        <div class="col-6">
                          <h6 class="text-uppercase fs-5 ls-2">Location
                          </h6>
                          <p class="mb-0">{{Auth::user()->location}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-6">
                  <!-- card -->
                  <div class="card">
                    <!-- card body -->
                    <div class="card-body">
                      <!-- card title -->
                      <h4 class="card-title">Projects Contributions</h4>
                      @foreach ($project as $p)
                        
                    
                      <div class="d-md-flex justify-content-between
                          align-items-center mb-4">
                        <div class="d-flex align-items-center">
                          <div>
                            <div class="icon-shape icon-lg border p-4 rounded-1">
                              <i class="fa-solid fa-briefcase"></i>
                            </div>
                          </div>
                          <!-- text -->
                          <div class="ms-3 ">
                            <h5 class="mb-1"><a href="#" class="text-inherit">{{$p->name}}</a></h5> 
                            <p class="mb-0 fs-5 text-muted">{{substr($p->bio,0,60)."..."}}</p>
                          </div>
                        </div>
                    
                      </div>
                   @endforeach
                </div>
    
                <!--234242424242424-->
    
              </div>
            </div>
          </div>
        </div>
      </div>

    @include('layouts/include/assets-js')
</body>
</html>