<x-guest-layout>
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container-fluid"  style="margin-top:10%;">
            <div class="row " style="padding-top:5rem">
              <!-- <div class="col-lg-12 position-relative " style="justify-content: center;"> -->
                <p class="text-lg  mb-0 text-center pb-5" style="font-size: 13rem;font-weight: bold;">LOREM IPSUM IS A DUMMY TEXT</p>
                <div class="row "  style="justify-content: center;">
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-sm-0 mt-4">
                        <div class="card  mb-2 cardhv text-center" >
                            <div class="nav-link text-success py-4 " href="">
                                <label class="form-label"><h5>ARE YOU ON MEDICATION...?</h5></label>
                                <br>

                                <a href="{{ route('add.medication', $user->id ) }}" class="btn btn-success">Yes</a>
                                <a href="{{ route('dashboard') }}" class="btn btn-secondary">No</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

</x-guest-layout>
