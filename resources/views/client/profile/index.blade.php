@extends('layouts.client')
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
        <div class="col-lg-3 mt-1 py-1">
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
        <div class="col-lg-9 mt-lg-0  mt-2">
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
                <div class="avatar avatar-xl position-relative ">
                    <img src="{{ asset($user->image) }}" alt="bruce" class="  shadow-sm" style="border-radius: 10px;width: 10rem; margin-right: 2rem;justify-content: center;">
                </div>
                </div>
                <div class="col-sm-4 ">
                <div >
                    <h6 class="mb-1 font-weight-bolder">
                    Name
                    </h6>
                    <h6 class="mb-1 font-weight-bolder">
                        Email
                    </h6>
                    <h6 class="mb-1 font-weight-bolder">
                        Gender
                    </h6>
                    <h6 class="mb-1 font-weight-bolder">
                    Zipcode
                        </h6>
                    <h6 class="mb-1 font-weight-bolder">
                        Height
                        </h6>
                        <h6 class="mb-1 font-weight-bolder">
                        weight
                        </h6>
                        <h6 class="mb-1 font-weight-bolder">
                    Hair color
                        </h6>
                    <p class="mb-0 font-weight-normal text-sm">

                    </p>
                </div>
                </div>
                <div class=" col-sm-4 my-auto">
                    <div >
                    <p class="mb-1 font-weight-bolder">
                        {{ $user->name }}
                    </p>
                    <p class="mb-1 font-weight-bolder">
                        {{ $user->email }}
                        </p>
                        <p class="mb-1 font-weight-bolder">
                            {{ $user->gender }}
                        </p>
                        <p class="mb-1 font-weight-bolder">
                            {{ $user->zipcode }}
                            </p>
                        <p class="mb-1 font-weight-bolder">
                            {{ $user->height }}
                        </p>
                        <p class="mb-1 font-weight-bolder">
                            {{ $user->weight }}
                            </p>
                        <p class="mb-1 font-weight-bolder">
                            {{ $user->haircolor }}
                        </p>
                    <p class="mb-0 font-weight-normal text-sm">

                    </p>
                    </div>
                </div>
            </div>
            <hr class="horizontal dark mt-1">
            <div  style="align-items:right;">
                <a href="{{ route('client_profiles.edit',$user->id) }}" class="btn btn-primary btn-sm">Edit</a>
            </div>


            </div>
        </div>
        <!-- Card Basic Info -->
        <div class="card  tabcontent"   id="basic-info">
            <div class="card-header">
            <h5>Change Password</h5>
            </div>
            <div class="row mx-3">
                <form action="{{ route('update_info') }}" method="post">
                @csrf
                <input type="hidden" name="token" value="{{ $user->password }}">
                <input type="hidden" name="email" value="{{ $user->email }}">
                <div class="col-12 d-flex">
                    <div class="col-2  my-2"><p>New password</p></div>
                    <div class="col-md-10">
                        <div class="input-group input-group-outline  my-3">
                            <label class="form-label">New Password</label>
                            <input  type="password" class="form-control" name="password" aria-label="Password" autocomplete="none">
                        </div>
                        </div>
                </div>
                <div class="col-12 d-flex">
                    <div class="col-2  my-2"><p>Confirm New  password</p></div>
                    <div class="col-md-10">
                        <div class="input-group input-group-outline  my-3">
                            <label class="form-label">Confirm New  password</label>
                            <input  type="password" class="form-control" name="password_confirmation" aria-label="Password" autocomplete="none">
                        </div>
                        </div>
                </div>

            <div class="d-flex  " style="justify-content:end;">  <div>
                <button type="button" class="btn bg-gradient-light mx-3  mb-2">Cancel </button>
                </div>
                <div >
                <button type="submit" class="btn bg-gradient-success mx-3 mb-2">Save Changes</button>
                </div></div>


            </form></div>

        </div>
        <!-- Card Change Password -->
        </div>
    </div>
</div>

@endsection
