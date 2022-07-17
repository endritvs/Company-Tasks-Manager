

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
        shrink-to-fit=no">
  
   @include('layouts/include/assets-css')
  
    <!-- Favicon icon-->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico"> -->
  
    <!-- Libs CSS -->
  
  
  
    <title>Edit Project </title>
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
                    <h3 class="mb-0 text-white">Edit Project</h3>
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
          <form class="row g-3 mt-5 p-5" method="POST" action="{{ route('adm.project.update',$project->id) }}">
            @csrf
           <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Name</label>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus value="{{$project->name}}">
              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Status</label>
             
              <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                <select name="status" class="form-select  @error('status') is-invalid @enderror" id="inputGroupSelect01">
                  <option  selected>{{$project->status}}</option>
                  @if($project->status=="Active")
                  {{--  --}}
                  <option value="Completed">Completed</option>
                  @else
                  <option value="Active">Active</option>
                  @endif
                </select>
              </div>
             
              @error('status')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>
           

      
           
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Start Date</label>
              <input id="startDate" type="date" class="form-control @error('startDate') is-invalid @enderror" name="startDate" required  autofocus value="{{$project->startDate}}">
              @error('startDate')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
               @enderror
            </div> 
                
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">End Date</label>
              <input id="endDate" type="date" class="form-control @error('endDate') is-invalid @enderror" name="endDate"  required  autofocus value="{{$project->endDate}}">
              @error('endDate')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
               @enderror
            </div> 

            <div class="col-md-6">
            <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">Options</label>
              <select name="user_id" class="form-select" id="inputGroupSelect01"> 
             
               
                @foreach ($users as $user)
                @if($user->name==$project->user['name'])
                <option value={{$user->id}}>{{$project->user['name']}}</option>
                @else
                <option  value={{$user->id}}>{{$user->name}}</option>
                @endif
                @endforeach
              </select>
            </div> 
             </div>
            <div class="col-md-6">
            


<div class="col">
  <textarea type="textarea" class="form-control  @error('bio') is-invalid @enderror" name="bio" placeholder="Bio " id="bio"  >{{$project->bio}}</textarea>
  @error('bio')
  <span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div>
       
            <div class="col-12">
              <button type="submit" class="btn btn-primary mt-2">{{ __('Save Changes') }}</button>
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