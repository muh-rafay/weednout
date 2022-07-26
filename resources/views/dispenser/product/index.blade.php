@extends('layouts.dispenser')
@section('content')
<div class="container-fluid">
    <nav>
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><h6>PRODUCTS</h6></li>
        </ol>
    </nav>
</div>
<div class="modal fade ms-4" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h5 class="mb-4">Product Details</h5>
                <div class="row">
                  <div class="col-xl-5 col-lg-6 text-center">
                    <img class="w-100 h-100 border-radius-lg shadow-lg " src="../../assets/img/image 7.jpg" alt="chair">

                  </div>
                  <div class="col-lg-5 mx-auto">
                    <h3 class="mt-lg-0 mt-1">Sweet tooth</h3>
                    <h6 class="mb-0 mt-1">Item :lorem ipsum</h6>
                    <h5>zip code: 2345</h5>
                    <div class="rating">
                      <i class="material-icons text-lg">grade</i>
                      <i class="material-icons text-lg">grade</i>
                      <i class="material-icons text-lg">grade</i>
                      <i class="material-icons text-lg">grade</i>
                      <i class="material-icons text-lg">star_outline</i>
                    </div>
                    <br>
                    <h4 class="mt-  1">Freature</h4>
                    <div class="d-flex"><p >Type of Strain:  </p><h6 >indica</h6></div>
                    <div class="d-flex"><p >Effect:  </p><h6 >giggly,talkative,Happy</h6></div>
                    <div class="d-flex"><p >Taste:   </p><h6>Berry,Earthy</h6></div>
                    <div class="d-flex"><p >Side effect:   </p><h6>concern,panic attact</h6></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="container-fluid py-4">

    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
            <div class="d-lg-flex">
                <div>
                <h5 class="mb-0">Products</h5>

                </div>
                <div class="ms-auto my-auto mt-lg-0 mt-4">
                    <div class="ms-auto my-auto ">
                        <a href="{{ route('dispenser_products.create') }}" style="background-color: #087807; color: #fff;" class="btn  btn-sm mb-0">+&nbsp; Add Product</a>
                    </div>
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
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Title</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Ingredients</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Feature</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Description</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Price</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td class="text-sm font-weight-normal">##0-{{ $product->id }}</td>
                        <td class="text-sm font-weight-normal">{{ $product->name  }}</td>
                        <td class="text-sm font-weight-normal">{{ $product->ingredient }}</td>
                        <td class="text-sm font-weight-normal">{{ $product->feature }}</td>
                        <td class="text-sm font-weight-normal">{{ $product->description }}</td>
                        <td class="text-sm font-weight-normal">{{ $product->price }}</td>
                        <td class="text-sm font-weight-normal">
                            <a href="{{ route('dispenser_products.edit',$product->id) }}">
                                <i class="material-icons text-info position-relative text-lg">visibility</i>
                            </a>
                            <form action="{{ route('dispenser_products.destroy',$product->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                   <button type="submit" class="d-flex"> <i class="material-icons  text-primary position-relative text-lg">delete</i>
                                   </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
<div>
@endsection
