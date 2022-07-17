<nav class="navbar-classic navbar navbar-expand-lg">
  <a id="nav-toggle" href="#"><i data-feather="menu" class="nav-icon me-2 icon-xs"></i></a>

  <!--Navbar nav -->
  <ul class="navbar-nav navbar-right-wrap ms-auto d-flex
              nav-top-wrap">
    <li class="dropdown stopevent">
      <a class="btn btn-light btn-icon rounded-circle indicator
                  indicator-primary text-muted" href="#" role="button" id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="icon-xs" data-feather="bell"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end" aria-labelledby="dropdownNotification">
        <div>
          <div class="border-bottom px-3 pt-2 pb-3 d-flex
                      justify-content-between align-items-center">
            <p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
            <a href="{{route('settings.edit',Auth::user()->id)}}" class="text-muted">
              <span>
                <i class="me-1 icon-xxs" data-feather="settings"></i>
              </span>
            </a>
          </div>
          <!-- List group -->
          <ul class="list-group list-group-flush
                      notification-list-scroll">
            <!-- List group item -->
           
            <li class="list-group-item bg-light">


  

              <a href="#" class="text-muted">
                <h5 class="mb-1">ewfew fwef ewf</h5>
                <p class="mb-0">
                  efwij ewpof we few f
                </p>
              </a>



            </li>
    
            <!-- List group item -->
       
            <!-- List group item -->
      
            <!-- List group item -->
        
          </ul>
         
        </div>
      </div>
    </li>
    <!-- List -->
    <li class="dropdown ms-2">
      <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="avatar avatar-md avatar-indicators avatar-online">
          @auth
            @if(!is_null(Auth::user()->profile_photo_path))
            <img src="{{asset(Auth::user()->profile_photo_path)}}" class="rounded-circle" alt="">
            {{-- <img   src="{{Auth::user()->profile_photo_path}}" class="rounded-circle" alt="photo"/> --}}
            @else
            <img src="{{ asset('profile_photo/No_Image.png') }}" alt="">
            {{-- <img   src="{{ asset('profile_photo/No_Image.png') }}" class="rounded-circle" alt="photo"/> --}}
            @endif  
          @endauth
        </div>
      </a>
      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
        <div class="px-4 pb-0 pt-2">


          <div class="lh-1">
            @auth
            <h5 class="mb-1">   {{ ucfirst(Auth::user()->name) }}</h5>
            <a  href="{{route('profile.edit',Auth::user()->id)}}" class="text-inherit fs-6">View my profile</a>
            @endauth
          </div>
          <div class="dropdown-divider mt-3 mb-2"></div>
        </div>

        <ul class="list-unstyled">

          <li>
            <a class="dropdown-item" href="{{route('profile.edit',Auth::user()->id)}}">
              
              <i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"></i>Edit
              Profile
            </a>
          </li>



          <li>
           
            <a class="dropdown-item" href="{{route('settings.edit',Auth::user()->id)}}">
              <i class="me-2 icon-xxs dropdown-item-icon" data-feather="settings"></i>Account Settings
            </a>
          </li>
          <li>
            
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"> <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>
             {{ __('Logout') }}
            
         </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
          </li>
        </ul>

      </div>
    </li>
  </ul>
</nav>