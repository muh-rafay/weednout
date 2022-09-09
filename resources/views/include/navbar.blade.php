<nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">
      <div class="sidenav-toggler sidenav-toggler-inner  ">
        <a href="javascript:;" class="nav-link text-body p-0">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </a>
      </div>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar" style="justify-content:end;">

        <ul class="navbar-nav  ">
          <li class="nav-item">
            <a href="" class="nav-link text-body p-0 position-relative" target="_blank">
              </a></li><li class="nav-item dropdown pe-2"><a href="" class="nav-link text-body p-0 position-relative" target="_blank">
                </a><a href="javascript:;" class="nav-link text-body p-0 position-relative" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{asset(auth()->user()->image)}}" class="avatar">

               </a>
               <ul class="dropdown-menu dropdown-menu-end p-2 me-sm-n4" aria-labelledby="dropdownMenuButton">
                 <li class="mb-2">
                  <a class="nav-link text-white" href="../../pages/dashboards/Profile.html">
                    <span class="sidenav-normal  ms-3  ps-1" style="color: #087807;font-weight: bold;"> My Profile </span>
                  </a>

                 </li>
                 <li class="mb-2">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="nav-link text-" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                             <span class="sidenav-normal  ms-4  ps-1"  style="color: #087807;font-weight: bold;">  Logout</span>
                        </a>
                    </form>

                 </li>

               </ul>
             </li>
        </ul>
      </div>
    </div>
  </nav>
