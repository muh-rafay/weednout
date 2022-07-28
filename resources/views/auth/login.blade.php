<x-guest-layout>
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>

        <div class="container my-auto">
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
          <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
              <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class=" shadow-success border-radius-lg py-3 pe-1"  style="background-color: green">
                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">WeedNOut</h4>
                    <div class="row mt-3">
                      <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Log in</h4>

                    </div>
                  </div>
                </div>

                <div class="card-body">
                   <form method="POST" action="{{ route('login') }}">
                      @csrf
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Email</label>
                      <input type="email" name="email" :value="old('email')" required autofocus class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Password</label>
                      <input  id="password"
                                  type="password"
                                  name="password"
                                  required autocomplete="current-password" class="form-control">
                    </div>
                    <div class="form-check form-switch d-flex align-items-center mb-3">
                      <input class="form-check-input" id="remember_me" type="checkbox" name="remember">
                      <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn  w-100 my-4 mb-2" style="background-color: green;color: #fff;">lOG IN</button>

                    </div>
                    <p class="mt-4 text-sm text-center">
                      Don't have an account?
                      <a href="{{ route('register') }}" class="text-success text-gradient font-weight-bold">Sign up</a>
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
</x-guest-layout>
