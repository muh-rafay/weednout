<x-app-layout>
    <div class="container-fluid">
        <nav>
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><h6>USERS</h6></li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid py-4">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="row">
              <div class="col-lg-12">
                <div class="card ">
                  <div class="card-body">
                    <h5 class="mb-4">Product Details</h5>
                    <div class="row">
                      <div class="col-6">
                        <img class=" border-radius-lg shadow-lg " style="width: 14rem; height:14rem" src="../../assets/img/image 7.jpg" alt="chair">
                      </div>
                      <div class="col-6  ">
                        <h3 class="mx-1">lorem ipsum</h3>
                        <h6 class="mx-1 mt-1">item</h6>
                        <h6 class="mx-1 mt-1">GH9897</h6>

                        <div class="rating mx-1 mt-1">
                          <i class="material-icons text-lg">grade</i>
                          <i class="material-icons text-lg">grade</i>
                          <i class="material-icons text-lg">grade</i>
                          <i class="material-icons text-lg">grade</i>
                          <i class="material-icons text-lg">star_outline</i>
                        </div>
                    </div>
                      </div>
                      <label class="mt-2" style="font-weight:bold ;">Feature</label>
                        <ul>
                          <li>lorem :The most beautiful curves of this swivel stool adds an elegant touch to any environment</li>
                          <li>lorem :The most beautiful curves of this swivel stool adds an elegant touch to any environment</li>
                          <li>lorem :The most beautiful curves of this swivel stool adds an elegant touch to any environment</li>
                          <li>lorem :The most beautiful curves of this swivel stool adds an elegant touch to any environment</li>
                        </ul>
                    </div>

                  </div>
                </div>
              </div>
              </div>
            </div>


            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-lg-flex">
                      <div>
                        <h5 class="mb-0">Users</h5>

                      </div>

                    </div>
                  </div>

                  <!-- Card header -->
                  <div class="card-body px-0 pb-0">
                    <div class="table-responsive">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">ID</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Full Name</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Email</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Gender</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Age</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Nastionality</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                            @if($ user()->role = "client")
                            <tr>
                                <td class="text-sm font-weight-normal">##0&nbsp{{ $user->id }}</td>
                                <td class="text-sm font-weight-normal">{{ $user->name }}</td>
                                <td class="text-sm font-weight-normal">{{ $user->email }}</td>
                                <td class="text-sm font-weight-normal">{{ $user->gender }}</td>
                                <td class="text-sm font-weight-normal">{{ $user->age }}</td>
                                <td class="text-sm font-weight-normal">{{ $user->nationality }}</td>
                                <td class="text-sm font-weight-normal">
                                    <a href="../../pages/dashboards/Userinfomation.html" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                        <i class="material-icons text-info position-relative text-lg" >visibility</i>
                                      </a>
                                      <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
                                        <i class="material-icons  text-primary position-relative text-lg">delete</i>
                                    </a>

                                </td>
                            </tr>
                            @endif
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>

          </div>
    </div>
</x-app-layout>
