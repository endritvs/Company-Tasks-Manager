<nav class="navbar-vertical navbar">
  <div class="nav-scroller">
    <!-- Brand logo -->
    <a class="navbar-brand" href="/admin/company/edit-company/1">
      <img src="{{asset('assets/images/brand/logo/logo.svg')}}" alt="" />
    </a>
    <!-- Navbar nav -->
    <ul class="navbar-nav flex-column" id="sideNavbar">
      <li class="nav-item">
        @if (Auth::user() && Auth::user()->role == 'Admin')
        <a class="nav-link has-arrow active" href="/admin/company/edit-company/1">
          <i data-feather="home" class="nav-icon icon-xs me-2"></i>
          Dashboard
        </a>
        @else
        <a class="nav-link has-arrow active" href="{{route('profile.edit',Auth::user()->id)}}">
          <i data-feather="home" class="nav-icon icon-xs me-2"></i>
          Dashboard
        </a>
        @endif

      </li>
      @if (Auth::user() && Auth::user()->role == 'Admin')
     
  

      <!-- Nav item -->
      <li class="nav-item">
        <div class="navbar-heading">Company</div>
      </li>


      <!-- Nav item -->
      
       
    
  

      
          <ul class="nav flex-column ">

            <li class="nav-item">
              <a class="nav-link" href="/admin/company/edit-company/1"><i class="fa-solid fa-building"></i>&nbsp; Company
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="{{route('users.index')}}"><i class="fa-solid fa-clipboard-user"></i>&nbsp; Staff
              </a>
            </li>




            <li class="nav-item">
              <a class="nav-link" href="{{route('projects')}}"><i class="fa-solid fa-briefcase"></i>&nbsp; Projects
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('project.completed')}}"><i class="fa-solid fa-circle-check"></i>&nbsp; Completed Projects
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('task.index')}}"><i class="fa-solid fa-list-check"></i>&nbsp; Tasks
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link has-arrow"  href="{{route('task.completed')}}">
               
                <i class="fa-solid fa-clipboard-check"></i>&nbsp; Completed Tasks
              </a>

            </li>
          </ul>
    @endif

    @if (Auth::user() && Auth::user()->role == 'Member')
          <li class="nav-item">
            <div class="navbar-heading">MY TASKS</div>
          </li>

          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link"  href="{{route('my.tasks',Auth::user()->id)}}">
                <i class="fa-solid fa-clipboard-list"></i></i>&nbsp; To do tasks
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link has-arrow"  href="{{route('my.completed.tasks',Auth::user()->id)}}">
               
                <i class="fa-solid fa-clipboard-check"></i>&nbsp; Completed Tasks
              </a>

            </li>
          </ul>
          @endif



   
          <li class="nav-item">
            <div class="navbar-heading">PROFILE</div>
          </li>
    
       
      
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link"  href="{{route('profile.edit',Auth::user()->id)}}">
                <i class="fa-solid fa-id-card"></i>&nbsp; Profile
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link has-arrow"  href="{{route('settings.edit',Auth::user()->id)}}">
               
                <i class="fa-solid fa-gears"></i>&nbsp; Settings
              </a>

            </li>
          </ul>
    





   


      <!-- Nav item -->
    
  
          <ul class="nav flex-column">
            <li class="nav-item">
            
              <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"> <i class="fa-solid fa-power-off"></i>&nbsp;
               {{ __('Logout') }}
              
           </a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
            </li>
          
           

          </ul>
      
 







    </ul>

  </div>
</nav>