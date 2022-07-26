<x-app-layout>
    <div class="container-fluid">
        <nav>
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><h6>USERS Information</h6></li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid py-4">
        <div class="row mb-5">
            <div class="col-lg-9 mt-lg-0 mt-4">
            <!-- Card Profile -->
                <div class="card card-body" id="profile">
                    <div class="row justify-content-center align-items-center">
                    <h5 class="mb-1 font-weight-bolder" style="color:#087807;">
                    Personal information
                        </h5>
                        <div class="col-12 d-flex">

                        <div class="col-4 my-auto">
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
                        <div class=" col-4 my-auto">
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
                    <hr class="horizontal dark mt-1">
                    <div  style="align-items: left;">
                        <h6 class="mb-1 font-weight-bolder" style="color:#087807;">
                            Medication
                                </h6>
                        <p >lorem, Lorem,Lorem</p>
                    </div>
                    <hr class="horizontal dark mt-1">
                    <h5 class="mb-1 font-weight-bolder" style="color:#087807;">
                    Assesments
                            </h5>
                            <div class="table-responsive">
                            <table class="table table-flush" id="products-list">
                                <thead class="thead-light">

                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Question</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                    <div class="d-flex">
                                        <div class="form-check my-auto">
                                        <input class="form-check-input" type="checkbox" id="customCheck1" checked>
                                        </div>

                                    </div>
                                    </td>
                                    <td class="text-sm">Lorem</td>
                                    <td class="text-sm">6/21/22</td>
                                    <td class="text-sm">Which medication are you using</td>

                                    <td class="text-sm">
                                    <a href="../../pages/dashboards/ViewUser.html" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                        <i class="material-icons text-info position-relative text-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">visibility</i>
                                    </a>
                                    <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
                                        <i class="material-icons  text-primary position-relative text-lg">delete</i>
                                    </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                        <div class="form-check my-auto">
                                            <input class="form-check-input" type="checkbox" id="customCheck1" checked>
                                        </div>

                                        </div>
                                        </td>
                                    <td class="text-sm">Lorem</td>
                                    <td class="text-sm">6/21/22</td>
                                    <td class="text-sm">Which medication are you using</td>

                                    <td class="text-sm">
                                        <a href="../../pages/dashboards/ViewUser.html" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                        <i class="material-icons text-info position-relative text-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">visibility</i>
                                        </a>
                                        <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
                                        <i class="material-icons  text-primary position-relative text-lg">delete</i>
                                        </a>

                                    </td>
                                    </tr>
                                    <tr>
                                    <td>
                                        <div class="d-flex">
                                        <div class="form-check my-auto">
                                            <input class="form-check-input" type="checkbox" id="customCheck1" checked>
                                        </div>

                                        </div>
                                        </td>
                                    <td class="text-sm">Lorem</td>
                                    <td class="text-sm">6/21/22</td>
                                    <td class="text-sm">Which medication are you using</td>

                                    <td class="text-sm">
                                        <a href="../../pages/dashboards/ViewUser.html" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                        <i class="material-icons text-info position-relative text-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">visibility</i>
                                        </a>
                                        <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
                                        <i class="material-icons  text-primary position-relative text-lg">delete</i>
                                        </a>

                                    </td>
                                    </tr>

                                </tbody>
                            </table>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
