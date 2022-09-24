<x-app-layout>
    @section('content')

<style>
    * {box-sizing: border-box}
    body {font-family: "Lato", sans-serif;}

    /* Style the tab */
    .tab {
      float: left;
      width: 100%;
      height: 259px;
    }

    /* Style the buttons inside the tab */
    .tab button {
      display: block;
      /* background-color: grey; */
      /* color: black; */
      padding: 35px 35px;
      width: 100%;
      margin-block: 4rem;
      border: none;
      outline: none;
      text-align: left;
      cursor: pointer;
      transition: 0.3s;
      font-size: 25rem;
    }


</style>


<div class="container-fluid">
    <div class="row mb-5">
        <div class="col-lg-3  ">
        <div class="card position-sticky top-1">
            <div class="flex-column border-radius-lg p-5">
            <div class="tab">
            <div class="tablinks pt-1" onclick="openCity(event, 'profile')" id="defaultOpen">
                <a class="text-dark d-flex bg-transparent" data-scroll="" href="#basic-info">
                <i   class="material-icons text-lg mx-2 " style="font-size: 1.5rem;"  >person</i>
                <p style="font-size: 1rem;">Profile</p>
                </a>
            </div>
            <div class="tablinks pt-4" onclick="openCity(event, 'basic-info')" id="defaultOpen">
                <a class="text-dark d-flex bg-transparent" data-scroll="" href="#basic-info">
                <i class="material-icons text-lg mx-2" >receipt_long</i>
                <p style="font-size: 1rem;">Basic Info</p>
                </a>
            </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-9 mt-lg-0  ">
        <!-- Card Profile -->
        @if($errors->any())
        <div class="alert alert-danger">
            <p><strong>Opps Something went wrong</strong></p>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif
        <div class="card card-body tabcontent" id="profile" >
            <div class="row justify-content-center align-items-center">
            <h5 class="mb-1 font-weight-bolder">
            Personal information
                </h5>
                <div class="col-lg-12 d-flex">
                <div class="col-sm-4  my-auto ">
                <div class="avatar avatar-xl position-relative mt-5">
                    <img src="{{asset($user->image)}}" alt="bruce" class="  shadow-sm" style="border-radius: 10px;width: 10rem; margin-right: 2rem;justify-content: center;">
                </div>
                </div>
                <table class="table table-striped">
                    <thead>
                      <tr><td><h6>Name</h6></td>
                        <td>{{ $user->name }}</td>
                      </tr>
                      <tr>
                          <td>
                        <h6>Email</h6></td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    </thead>
                </table>
            </div>
            <hr class="horizontal dark mt-1">
            <div  style="align-items:right;">
                <a href="{{ route('dispenser_profiles.edit',$user->id) }}" class="btn btn-primary btn-sm">Edit</a>
            </div>


            </div>
        </div>


    </div>
</div>

</x-app-layout>
