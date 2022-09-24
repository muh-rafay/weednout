@extends('layouts.client')
@section('content')
<div class="container-fluid ">
   <nav>
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
         <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
            <h6>Product</h6>
         </li>
      </ol>
   </nav>
</div>

<!-- </div> -->
<!-- End Navbar -->
<div class="container-fluid py-4">
   <div class="row">
      <div class="col-lg-12 position-relative z-index-2">
         <div  class="row mt-5 ">
            <div class="col-lg-12   position-relative col-sm-12 col-md-12 d-flex ">
                @foreach ($products as $key => $pro)
                @foreach ($pro as $key => $product)
                @if(!empty($product))
                    <div class="col-lg-3  position-relative col-sm-12 px-2 col-md-12 ">
                        <div class="  mt-n4  z-index-2">
                            <a class="d-block ">
                                <img src="{{asset($product->image)}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" style="  height: 50px;
                                display: block;width:300px !important;height:200px !important;margin-left: auto;margin-right: auto;">
                                <!-- <img src="../../assets/img/products/product-1-min.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"> -->
                            </a>
                        </div>
                        <div class="card-footer my-2 d-flex justify-content-between">
                            <div>
                                <h6 class="font-weight-bolder my-auto">{{ $product->name }}</h6>
                                <p class="font-weight-normal my-auto">${{ $product->price }}</p>

                            </div>
                            {{-- <div>
                                <i class="material-icons text-danger position-relative text-lg">grade</i>
                                <!-- <i class="material-icons position-relative text-lg me-1 my-auto">place</i> -->
                            </div> --}}
                        </div>
                    </div>
                @endif
                @endforeach
                @endforeach


            </div>
         </div>
      </div>
   </div>

</div>
@endsection
