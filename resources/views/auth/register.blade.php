<x-guest-layout>
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
              <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class=" shadow-success border-radius-lg py-3 pe-1"  style="background-color: green">
                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">WeedNOut</h4>
                    <div class="row mt-3">
                      <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign up</h4>
                      <!-- <div class="col-2 text-center ms-auto">
                        <a class="btn btn-link px-3" href="javascript:;">
                          <i class="fa fa-facebook text-white text-lg"></i>
                        </a>
                      </div>
                      <div class="col-2 text-center px-1">
                        <a class="btn btn-link px-3" href="javascript:;">
                          <i class="fa fa-github text-white text-lg"></i>
                        </a>
                      </div>
                      <div class="col-2 text-center me-auto">
                        <a class="btn btn-link px-3" href="javascript:;">
                          <i class="fa fa-google text-white text-lg"></i>
                        </a>
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="card-body">
                     <form method="POST" action="{{ route('register') }}">
                          @csrf

                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Name</label>
                      <input id="name"  type="text" name="name" :value="old('name')" required autofocus  class="form-control">
                    </div>
                      <div class="input-group input-group-outline my-3">
                      <label class="form-label">Email</label>
                      <input id="email"  type="email" name="email" :value="old('email')" required  class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Password</label>
                      <input id="password"  type="password"
                                  name="password"
                                  required autocomplete="new-password"  class="form-control">
                    </div>
                      <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Confirm Password</label>
                      <input id="password_confirmation"  type="password"
                                   type="password"
                                  name="password_confirmation" required  class="form-control">
                    </div>

                    <div class="text-center">

                        <button type="submit" class="btn  w-100 my-4 mb-2" style="background-color: green;color: #fff;">Sign up</button>
                      
                    </div>
                    <p class="mt-4 text-sm text-center">
                      Already registered?
                      <a href="{{ route('login') }}" class="text-success text-gradient font-weight-bold">Login</a>
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
</x-guest-layout>
