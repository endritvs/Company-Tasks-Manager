

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
        shrink-to-fit=no">
  
   @include('layouts/include/assets-css')
  
    <!-- Favicon icon-->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico"> -->
  
    <!-- Libs CSS -->
  
  
  
    <title>Homepage </title>
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
            <div class="col-lg-12 col-md-12 col-12">
              <!-- Page header -->
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0 text-white">General Company Settings</h3>
                  </div>
                     <div>
                    <a href="{{route('adm.company.create')}}" class="btn btn-white">Create a Company</a>
                    
               
                  </div>
                
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
              <!-- card -->
              <a href="{{route('projects')}}">
                <div class="card">
                  <!-- card body -->
                  <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                      mb-3">
                      <div>
                        <h4 class="mb-0">Projects</h4>
                      </div>
                      <div class="icon-shape icon-md bg-light-primary text-primary
                        rounded-2">
                        <i class="bi bi-briefcase fs-4"></i>
                      </div>
                    </div>
                    <!-- project number -->
                    <div>
                      <h1 class="fw-bold">18</h1>
                      <p class="mb-0"><span class="text-dark me-2">2</span>Completed</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
              <!-- card -->
              <a href="/active-task">
                <div class="card">
                  <!-- card body -->
                  <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                      mb-3">
                      
                      <div>
                        <h4 class="mb-0">Active Task</h4>
                      </div>
                      <div class="icon-shape icon-md bg-light-primary text-primary
                        rounded-2">
                        <i class="bi bi-list-task fs-4"></i>
                      </div>
                    </div>
                    <!-- project number -->
                    <div>
                      <h1 class="fw-bold">132</h1>
                      <p class="mb-0"><span class="text-dark me-2">28</span>Completed</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
              <!-- card -->
              <a href="/teams">
                <div class="card">
                  <!-- card body -->
                  <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                      mb-3">
                      <div>
                        <h4 class="mb-0">Teams</h4>
                      </div>
                      <div class="icon-shape icon-md bg-light-primary text-primary
                        rounded-2">
                        <i class="bi bi-people fs-4"></i>
                      </div>
                    </div>
                    <!-- project number -->
                    <div>
                      <h1 class="fw-bold">12</h1>
                      <p class="mb-0"><span class="text-dark me-2">1</span>Completed</p>
                    </div>
                  </div>
                </div>
              </a>
  
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
              <!-- card -->
              <a href="/completed-task">
                <div class="card">
                  <!-- card body -->
                  <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                      mb-3">
                      <div>
                        <h4 class="mb-0">Completed task</h4>
                      </div>
                      <div class="icon-shape icon-md bg-light-primary text-primary
                        rounded-2">
                        <i class="bi bi-bullseye fs-4"></i>
                      </div>
                    </div>
                    <!-- project number -->
                    <div>
                      <h1 class="fw-bold">76%</h1>
                      <p class="mb-0"><span class="text-success me-2">5%</span>Completed</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- row  -->
         
          <!-- 22222222222222222222222222222222 row  -->
  
          <!--ggggggggggggggggggggggggggggggggggggg-->
    
     
      <div class="row mb-8 mt-5">
                <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                  <div class="mb-4 mb-lg-0">
                    <h4 class="mb-1">General Setting</h4>
                    <p class="mb-0 fs-5 text-muted">Company configuration settings </p>
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
  
                  
                        
                     
                        <form  method="post" action="{{route('company.update',$company->id)}}" enctype="multipart/form-data">
                          @if (session('statusU'))
                          <div class="alert alert-success" role="alert">
                              {{ session('statusU') }}
                          </div>
                      @elseif (session('error'))
                          <div class="alert alert-danger" role="alert">
                              {{ session('error') }}
                          </div>
                      @endif
                          @csrf
                          <div class="mb-3 row">
                            <label for="fullName" class="col-sm-4 col-form-label
                                form-label">Company Name</label>
                            <div class="col-md-8 col-12">
                              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="First name" id="fullName" value="{{$company->name}}" >
                              @error('name')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                            </div>
                       
                          </div>
      
                          <!-- row -->
                          <div class="mb-3 row">
                            <label for="email" class="col-sm-4 col-form-label
                                form-label">Company Email</label>
                            <div class="col-md-8 col-12">
                              <input type="email" class="form-control @error('lastname') is-invalid @enderror" name="email" placeholder="Email" id="email" value="{{$company->email}}" >
                              @error('email')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                            </div>
                          </div>
                          <!-- row -->
                          <div class="mb-3 row">
                            <label for="phone" class="col-sm-4 col-form-label
                                form-label">Company Phone </label>
                            <div class="col-md-8 col-12">
                              <input type="text" class="form-control  @error('phone') is-invalid @enderror" name="phone" placeholder="Phone" id="phone" value="{{$company->phone}}" >
                              @error('phone')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                            </div>
                          </div>
                          <!-- row -->
                          <div class="mb-3 row">
                            <label for="location" class="col-sm-4 col-form-label
                                form-label">Company Location</label>
      
                            <div class="col-md-8 col-12">
                              <input type="text" class="form-control  @error('location') is-invalid @enderror" name="location" placeholder="Location" id="location" value="{{$company->location}}">
                              @error('location')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                            </div>
                          </div>
                          
                          <!-- row -->
                          <div class="mb-3 row">
                            <label for="addressLine" class="col-sm-4 col-form-label
                                form-label">Address line </label>
      
      
                            <div class="col-md-8 col-12">
                              <input type="text" class="form-control  @error('location') is-invalid @enderror" name="address" placeholder="Address " id="addressLine" value="{{$company->address}}" >
                              @error('address')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                            </div>
                          </div>
                          <!-- row -->
                     
                                
  
                                        <div class="mb-3 row">
                                          <label for="addressLine" class="col-sm-4 col-form-label
                                              form-label">Bio </label>
      
      
                            <div class="col-md-8 col-12">
                              <textarea type="textarea" class="form-control  @error('bio') is-invalid @enderror" name="bio" placeholder="Bio " id="bio"   >{{$company->bio}}</textarea>
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
                              <input type="number" class="form-control" name="zipcode" placeholder="Zip Code" id="zipcode" value="{{$company->zipcode}}" >
                            </div>
                            <div class="offset-md-4 col-md-8 mt-4">
                              <button type="submit" class="btn btn-primary"> Save
                                Changes</button> 
                                 <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                              Delete
                            </button>
                            </div>
                        
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Delete Company</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    Are you sure you want to delete the company?
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <a class="btn btn-danger" href="{{route('company.destroy',$company->id)}}">DELETE</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
      
                </div>
              </div>
  
  
  
    <!-- Scripts -->
    <!-- Libs JS -->
      </div>
      </div>
    </div>
  @include('layouts/include/assets-js')
  
  </body>
  
  
  
  <!-- Mirrored from codescandy.com/dashui/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Mar 2022 12:03:44 GMT -->
  
  </html>