<x-app-layout>
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
            <div class="card card-body tabcontent" id="profile" >
              <div class="row justify-content-center align-items-center">
                <h5 class="mb-1 font-weight-bolder">
                Personal information
                  </h5>
                  <div class="col-lg-12 d-flex">
                    <div class="col-sm-4  my-auto ">
                    <div class="avatar avatar-xl position-relative ">
                      <img src="../../assets/img/team-3.jpg" alt="bruce" class="  shadow-sm" style="border-radius: 10px;width: 10rem; margin-right: 2rem;justify-content: center;">
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
                          Lorem Ipsum
                        </p>
                        <p class="mb-1 font-weight-bolder">
                           loremipsum@gmail.com
                          </p>
                          <p class="mb-1 font-weight-bolder">
                           Male
                          </p>
                          <p class="mb-1 font-weight-bolder">
                              4567
                             </p>
                          <p class="mb-1 font-weight-bolder">
                            32cm
                           </p>
                           <p class="mb-1 font-weight-bolder">
                              32cm
                             </p>
                           <p class="mb-1 font-weight-bolder">
                         Black
                           </p>
                        <p class="mb-0 font-weight-normal text-sm">

                        </p>
                      </div>
                    </div>
                </div>
                <hr class="horizontal dark mt-1"><div  style="align-items: left;">
                    <h6 class="mb-1 font-weight-bolder">
                       Medication
                          </h6>
                    <p >lorem, Lorem,Lorem</p>

                </div>


              </div>
            </div>
            <!-- Card Basic Info -->
            <div class="card  tabcontent"   id="basic-info">
              <div class="card-header">
                <h5>Change Password</h5>
              </div>
              <div class="row mx-3">
                 <form role="form">
                    <div class="col-12 d-flex">
                        <div class="col-2 my-2"><p>current password</p></div>
                        <div class="col-md-10">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Current Password</label>
                              <input  type="password" class="form-control" aria-label="Password">
                            </div>
                          </div>
                    </div>
                    <div class="col-12 d-flex">
                        <div class="col-2  my-2"><p>New password</p></div>
                        <div class="col-md-10">
                            <div class="input-group input-group-outline  my-3">
                                <label class="form-label">New Password</label>
                              <input  type="password" class="form-control" aria-label="Password">
                            </div>
                          </div>
                    </div>
                    <div class="col-12 d-flex">
                        <div class="col-2  my-2"><p>Confirm New  password</p></div>
                        <div class="col-md-10">
                            <div class="input-group input-group-outline  my-3">
                                <label class="form-label">Confirm New  password</label>
                              <input  type="password" class="form-control" aria-label="Password">
                            </div>
                          </div>
                    </div>

                <div class="d-flex  " style="justify-content:end;">  <div>
                    <button type="button" class="btn bg-gradient-light mx-3  mb-2">Cancel </button>
                  </div>
                  <div >
                    <button type="button" class="btn bg-gradient-success mx-3 mb-2">Save Changes</button>
                  </div></div>


              </form></div>

            </div>
            <!-- Card Change Password -->
          </div>
        </div>

      </div>
</x-app-layout>
