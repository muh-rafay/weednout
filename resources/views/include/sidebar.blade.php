<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0  my-3 fixed-start ms-3  " id="sidenav-main" style="background-color: #fff;">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard-pro/pages/dashboards/analytics.html " target="_blank">
        <img src="{{asset('/assets/img/logo.png')}}" width="150px" height="150px"  class="img-fluid"  style="justify-content: center; position: absolute;">
        <!-- <span class="ms-1 font-weight-bold text-success">Weed n Out</span> -->
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main" style="color: #087807;">
      <ul class="navbar-nav">
        <li class="nav-item mb-2 mt-0">
          <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false"  style="color: #087807;">
            <img src="{{asset('/assets/img/team-3.jpg')}}" class="avatar">
            <span class="nav-link-text ms-2 ps-1"  style="color: #087807;font-weight: bold;">{{ Auth::user()->name }}</span>
          </a>
          <div class="collapse" id="ProfileNav" >
            <ul class="nav ">
              <li class="nav-item">
                <a class="nav-link text-white" href="../../pages/dashboards/Profile.html">
                  <span class="sidenav-normal  ms-3  ps-1"  style="color: #087807;font-weight: bold;"> My Profile </span>
                </a>
              </li>
              <li class="nav-item">
                <div class="offset-2">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <hr class="horizontal light mt-0">
         <li class="nav-item">

          <div class="collapse  show " id="dashboardsExamples">
            <ul class="nav ">
            @if(Auth::user()->hasrole('admin'))
              <li class="nav-item  " id="navlink " >
                <a class="nav-link "  href="{{ route('dashboard') }}">
                  <i class="material-icons-round opacity-10" style="font-size: 1rem;color:#087807 ">dashboard</i>
                  <span class="nav-link-text  sidenav-normal  ms-2  ps-1  " style="color: #087807;font-weight: bold;" > Dashboard</span>
                </a>
              </li>
              <li class="nav-item " id="navlink">
                <a class="nav-link text-success " href="{{ route('assesments.index') }}">
                  <i class="fa fa-search" style="font-size: 1rem;color:#087807 ;font-weight: bold;" ></i>
                  <span class="sidenav-normal  ms-2  ps-1"  style="color: #087807;font-weight: bold;"> Assesments  </span>
                </a>
              </li>
              <li class="nav-item " id="navlink">
                <a class="nav-link text-success  " href="{{ route('users.index') }}">
                  <i class="material-icons opacity-10" style="font-size: 1rem;color:#087807 ;font-weight: bold;">person_add</i>
                  <span class="sidenav-normal  ms-2  ps-1"  style="color: #087807;font-weight: bold;">User</span>
                </a>
              </li>
              <li class="nav-item  " id="navlink">
                <a class="nav-link text-success  " href="{{ route('products.index') }}">
                  <svg  style="width:1rem; height:1rem;font-weight: bolder; " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 502 502" style="enable-background:new 0 0 502 502;" xml:space="preserve">
                    <g>
                      <g>
                        <g>
                          <path fill="#087807" d="M469.575,102.529c-20.909-20.909-48.71-32.425-78.28-32.425s-57.371,11.516-78.28,32.425L251,164.543l-62.015-62.015     c-20.909-20.909-48.71-32.425-78.28-32.425s-57.371,11.516-78.28,32.425S0,151.238,0,180.809     c0,29.571,11.516,57.371,32.425,78.28l136.613,136.613c1.18,1.296,2.387,2.566,3.594,3.771     c20.912,20.911,48.707,32.424,78.278,32.424c0.027,0,0.055,0,0.082,0c0.006,0,0.012,0,0.018,0c0.027,0,0.054,0,0.082,0     c29.569,0,57.367-11.514,78.278-32.424c1.216-1.216,2.421-2.485,3.593-3.77L469.576,259.09     C490.484,238.18,502,210.379,502,180.809C502,151.239,490.484,123.438,469.575,102.529z M141.782,340.161l-17.987-17.987     l5.557-5.665c3.867-3.943,3.807-10.274-0.136-14.142c-3.945-3.868-10.275-3.807-14.142,0.136l-5.423,5.528l-63.085-63.085     C29.435,227.814,20,205.037,20,180.809c0-24.228,9.435-47.006,26.567-64.138c17.132-17.133,39.909-26.567,64.138-26.567     s47.006,9.435,64.138,26.567l62.015,62.015l-64.227,64.227c-26.421,26.42-36.798,62.925-30.84,97.26L141.782,340.161z      M455.433,244.947l-63.121,63.12L320.5,236.255c-3.906-3.904-10.236-3.904-14.143,0c-3.905,3.905-3.905,10.237,0,14.143     l71.812,71.812l-59.464,59.464l-3.656,3.656c-2.139,2.139-4.366,4.158-6.672,6.053C292.231,404.65,272.17,411.875,251,411.896     c-24.195-0.024-46.941-9.458-64.049-26.566l-3.483-3.483c-32.303-35.85-30.871-90.616,3.306-124.792l140.384-140.384     c17.132-17.133,39.909-26.567,64.138-26.567s47.006,9.435,64.138,26.567C472.565,133.803,482,156.58,482,180.809     S472.565,227.815,455.433,244.947z"/>
                          <path fill="#087807"d="M284.813,200.568c-3.906-3.904-10.236-3.904-14.143,0c-3.905,3.905-3.905,10.237,0,14.143l11.711,11.711     c1.953,1.952,4.512,2.929,7.071,2.929s5.118-0.977,7.071-2.929c3.905-3.905,3.905-10.237,0-14.143L284.813,200.568z"/>
                        </g>
                      </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    </svg>
                  <span class="sidenav-normal  ms-2  ps-1"  style="color: #087807;font-weight: bold;"> Product </span>
                </a>
              </li>
              <li class="nav-item " id="navlink">
                <a class="nav-link text-success  " href="{{ route('strains.index') }}">
                    <svg  style="width:1rem; height:1rem;font-weight: bolder; " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 502 502" style="enable-background:new 0 0 502 502;" xml:space="preserve">
                    <g>
                        <g>
                        <g>
                            <path fill="#087807" d="M469.575,102.529c-20.909-20.909-48.71-32.425-78.28-32.425s-57.371,11.516-78.28,32.425L251,164.543l-62.015-62.015     c-20.909-20.909-48.71-32.425-78.28-32.425s-57.371,11.516-78.28,32.425S0,151.238,0,180.809     c0,29.571,11.516,57.371,32.425,78.28l136.613,136.613c1.18,1.296,2.387,2.566,3.594,3.771     c20.912,20.911,48.707,32.424,78.278,32.424c0.027,0,0.055,0,0.082,0c0.006,0,0.012,0,0.018,0c0.027,0,0.054,0,0.082,0     c29.569,0,57.367-11.514,78.278-32.424c1.216-1.216,2.421-2.485,3.593-3.77L469.576,259.09     C490.484,238.18,502,210.379,502,180.809C502,151.239,490.484,123.438,469.575,102.529z M141.782,340.161l-17.987-17.987     l5.557-5.665c3.867-3.943,3.807-10.274-0.136-14.142c-3.945-3.868-10.275-3.807-14.142,0.136l-5.423,5.528l-63.085-63.085     C29.435,227.814,20,205.037,20,180.809c0-24.228,9.435-47.006,26.567-64.138c17.132-17.133,39.909-26.567,64.138-26.567     s47.006,9.435,64.138,26.567l62.015,62.015l-64.227,64.227c-26.421,26.42-36.798,62.925-30.84,97.26L141.782,340.161z      M455.433,244.947l-63.121,63.12L320.5,236.255c-3.906-3.904-10.236-3.904-14.143,0c-3.905,3.905-3.905,10.237,0,14.143     l71.812,71.812l-59.464,59.464l-3.656,3.656c-2.139,2.139-4.366,4.158-6.672,6.053C292.231,404.65,272.17,411.875,251,411.896     c-24.195-0.024-46.941-9.458-64.049-26.566l-3.483-3.483c-32.303-35.85-30.871-90.616,3.306-124.792l140.384-140.384     c17.132-17.133,39.909-26.567,64.138-26.567s47.006,9.435,64.138,26.567C472.565,133.803,482,156.58,482,180.809     S472.565,227.815,455.433,244.947z"/>
                            <path fill="#087807"d="M284.813,200.568c-3.906-3.904-10.236-3.904-14.143,0c-3.905,3.905-3.905,10.237,0,14.143l11.711,11.711     c1.953,1.952,4.512,2.929,7.071,2.929s5.118-0.977,7.071-2.929c3.905-3.905,3.905-10.237,0-14.143L284.813,200.568z"/>
                        </g>
                        </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    </svg>
                    <span class="sidenav-normal  ms-2  ps-1"  style="color: #087807;font-weight: bold;">Strain</span>
                </a>
              </li>
            @endif
            @if(Auth::user()->hasrole('dispenser'))
            <li class="nav-item  " id="navlink " >
                <a class="nav-link "  href="{{ route('dashboard') }}">
                  <i class="material-icons-round opacity-10" style="font-size: 1rem;color:#087807 ">dashboard</i>
                  <span class="nav-link-text  sidenav-normal  ms-2  ps-1  " style="color: #087807;font-weight: bold;" > Dashboard</span>
                </a>
              </li>
            <li class="nav-item  " id="navlink">
                <a class="nav-link text-success  " href="{{ route('dispenser_products.index') }}">
                  <svg  style="width:1rem; height:1rem;font-weight: bolder; " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 502 502" style="enable-background:new 0 0 502 502;" xml:space="preserve">
                    <g>
                      <g>
                        <g>
                          <path fill="#087807" d="M469.575,102.529c-20.909-20.909-48.71-32.425-78.28-32.425s-57.371,11.516-78.28,32.425L251,164.543l-62.015-62.015     c-20.909-20.909-48.71-32.425-78.28-32.425s-57.371,11.516-78.28,32.425S0,151.238,0,180.809     c0,29.571,11.516,57.371,32.425,78.28l136.613,136.613c1.18,1.296,2.387,2.566,3.594,3.771     c20.912,20.911,48.707,32.424,78.278,32.424c0.027,0,0.055,0,0.082,0c0.006,0,0.012,0,0.018,0c0.027,0,0.054,0,0.082,0     c29.569,0,57.367-11.514,78.278-32.424c1.216-1.216,2.421-2.485,3.593-3.77L469.576,259.09     C490.484,238.18,502,210.379,502,180.809C502,151.239,490.484,123.438,469.575,102.529z M141.782,340.161l-17.987-17.987     l5.557-5.665c3.867-3.943,3.807-10.274-0.136-14.142c-3.945-3.868-10.275-3.807-14.142,0.136l-5.423,5.528l-63.085-63.085     C29.435,227.814,20,205.037,20,180.809c0-24.228,9.435-47.006,26.567-64.138c17.132-17.133,39.909-26.567,64.138-26.567     s47.006,9.435,64.138,26.567l62.015,62.015l-64.227,64.227c-26.421,26.42-36.798,62.925-30.84,97.26L141.782,340.161z      M455.433,244.947l-63.121,63.12L320.5,236.255c-3.906-3.904-10.236-3.904-14.143,0c-3.905,3.905-3.905,10.237,0,14.143     l71.812,71.812l-59.464,59.464l-3.656,3.656c-2.139,2.139-4.366,4.158-6.672,6.053C292.231,404.65,272.17,411.875,251,411.896     c-24.195-0.024-46.941-9.458-64.049-26.566l-3.483-3.483c-32.303-35.85-30.871-90.616,3.306-124.792l140.384-140.384     c17.132-17.133,39.909-26.567,64.138-26.567s47.006,9.435,64.138,26.567C472.565,133.803,482,156.58,482,180.809     S472.565,227.815,455.433,244.947z"/>
                          <path fill="#087807"d="M284.813,200.568c-3.906-3.904-10.236-3.904-14.143,0c-3.905,3.905-3.905,10.237,0,14.143l11.711,11.711     c1.953,1.952,4.512,2.929,7.071,2.929s5.118-0.977,7.071-2.929c3.905-3.905,3.905-10.237,0-14.143L284.813,200.568z"/>
                        </g>
                      </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    </svg>
                  <span class="sidenav-normal  ms-2  ps-1"  style="color: #087807;font-weight: bold;"> Product </span>
                </a>
              </li>
            @endif
            </ul>
          </div>
        </li>

      </ul>
    </div>
  </aside>
