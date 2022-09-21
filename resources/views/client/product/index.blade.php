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
@foreach ($products as $product)
<div class="modal fade ms-4" id="exampleModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
   <div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
      <div class="container-fluid py-4">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-body">
                     <h5 class="mb-4">Product Details</h5>
                     <div class="row">
                        <div class="col-xl-5 col-lg-6 text-center">
                           <img class="w-100 h-100 border-radius-lg shadow-lg " src="{{asset('/assets/img/image 4.jpg')}}" >
                        </div>
                        <div class="col-lg-5 ">
                           <h3 class="mt-lg-0 mt-1">{{ $product->name }}</h3>
                           <div class="d-flex">
                              <h5>Item:</h5>
                              <p> {{ $product->ingredient }}</p>
                           </div>
                           {{--
                           <div class="d-flex">
                              <h5>zip code:</h5>
                              <p> 2345</p>
                           </div>
                           <div class="rating">
                              <i class="material-icons text-lg">grade</i>
                              <i class="material-icons text-lg">grade</i>
                              <i class="material-icons text-lg">grade</i>
                              <i class="material-icons text-lg">grade</i>
                              <i class="material-icons text-lg">star_outline</i>
                           </div>
                           --}}
                           <br>
                           <h4 class="mt-1">Feature</h4>
                           <div class="d-flex p" >
                              <div  class="col-6">
                                 <h6 class="mb-1 font-weight-bolder">
                                    {{ $product->feature }}
                                 </h6>
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
</div>
@endforeach
<!-- </div> -->
<!-- End Navbar -->
<div class="container-fluid py-4">
   <div class="row">
      <div class="col-lg-12 position-relative z-index-2">
         <h3 >Product</h3>
         <div  class="row mt-5 ">
            <div class="col-lg-12   position-relative col-sm-12 col-md-12 d-flex ">
               <div class="col-lg-3  position-relative col-sm-12 px-2 col-md-12 ">
                  <div class="  mt-n4  z-index-2">
                     <a class="d-block ">
                        <img src="{{asset('/assets/img/image 4.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                        <!-- <img src="../../assets/img/products/product-1-min.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"> -->
                     </a>
                  </div>
                  <div class="card-footer my-2 d-flex justify-content-between">
                     <div>
                        <h6 class="font-weight-bolder my-auto">Lorem Ipsum</h6>
                        <p class="font-weight-normal my-auto">Lorem Ipsum</p>
                        <p class="font-weight-normal my-auto">4432</p>
                     </div>
                     <div>
                        <i class="material-icons text-danger position-relative text-lg">grade</i>
                        <!-- <i class="material-icons position-relative text-lg me-1 my-auto">place</i> -->
                     </div>
                  </div>
               </div>
               <div class="col-lg-3  col-sm-12 px-2 col-md-12  ">
                  <div class=" p-0  mt-n4  z-index-2">
                     <a class="d-block ">
                        <img src="{{asset('/assets/img/image 5.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                        <!-- <img src="../../assets/img/products/product-1-min.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"> -->
                     </a>
                  </div>
                  <div class="card-footer my-2 d-flex justify-content-between">
                     <div>
                        <h6 class="font-weight-bolder my-auto">Lorem Ipsum</h6>
                        <p class="font-weight-normal my-auto">Lorem Ipsum</p>
                        <p class="font-weight-normal my-auto">4432</p>
                     </div>
                     <div>
                        <i class="material-icons text-lg ms-auto">star_outline</i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-3 px-2 col-md-12  ">
                  <div class=" p-0 mt-n4  z-index-2">
                     <a class="d-block ">
                     <img src="{{asset('/assets/img/image 2.jpg')}}" alt="img-blur-shadow" class="img-fluid border-radius-lg ">
                     </a>
                  </div>
                  <div class="card-footer my-2  d-flex justify-content-between">
                     <div>
                        <h6 class="font-weight-bolder my-auto">Lorem Ipsum</h6>
                        <p class="font-weight-normal my-auto">Lorem Ipsum</p>
                        <p class="font-weight-normal my-auto">4432</p>
                     </div>
                     <div>
                        <i class="material-icons text-danger position-relative text-lg">grade</i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-3 px-2 col-md-12 ">
                  <div class=" p-0  mt-n4  z-index-2">
                     <a class="d-block ">
                     <img src="{{asset('/assets/img/image 3.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                     </a>
                  </div>
                  <div class="card-footer my-2 d-flex justify-content-between">
                     <div>
                        <h6 class="font-weight-bolder my-auto">Lorem Ipsum</h6>
                        <p class="font-weight-normal my-auto">Lorem Ipsum</p>
                        <p class="font-weight-normal my-auto">4432</p>
                     </div>
                     <div>
                        <i class="material-icons text-lg ms-auto">star_outline</i>
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
</div>
<div class="container-fluid py-4">
   <div class="row">
      <div class="col-lg-12 position-relative z-index-2">
         <h3 >Product Near By</h3>
         <div  class="row mt-5 ">
            <div class="col-lg-12 col-md-12 d-flex ">
               <div class="col-lg-3  position-relative col-sm-3 px-2 col-md-12  ">
                  <div class="  mt-n4  z-index-2">
                     <a class="d-block ">
                     <img src="{{asset('/assets/img/image 6.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                     </a>
                  </div>
                  <div class="card-footer my-2 d-flex justify-content-between">
                     <div>
                        <h6 class="font-weight-bolder my-auto">Lorem Ipsum</h6>
                        <p class="font-weight-normal my-auto">Lorem Ipsum</p>
                        <p class="font-weight-normal my-auto">4432</p>
                     </div>
                     <div>
                        <i class="material-icons text-danger position-relative text-lg">grade</i>
                        <!-- <i class="material-icons position-relative text-lg me-1 my-auto">place</i> -->
                     </div>
                  </div>
               </div>
               <div class="col-lg-3  col-sm-3 px-2 col-md-12  ">
                  <div class=" p-0  mt-n4  z-index-2">
                     <a class="d-block ">
                     <img src="{{asset('/assets/img/image 4.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                     </a>
                  </div>
                  <div class="card-footer my-2 d-flex justify-content-between">
                     <div>
                        <h6 class="font-weight-bolder my-auto">Lorem Ipsum</h6>
                        <p class="font-weight-normal my-auto">Lorem Ipsum</p>
                        <p class="font-weight-normal my-auto">4432</p>
                     </div>
                     <div>
                        <i class="material-icons text-lg ms-auto">star_outline</i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-3 px-2 col-md-12  ">
                  <div class=" p-0 mt-n4  z-index-2">
                     <a class="d-block ">
                     <img src="../../assets/img/image 3.jpg" alt="img-blur-shadow" class="img-fluid border-radius-lg w-250 ">
                     </a>
                  </div>
                  <div class="card-footer my-2 d-flex justify-content-between">
                     <div>
                        <h6 class="font-weight-bolder my-auto">Lorem Ipsum</h6>
                        <p class="font-weight-normal my-auto">Lorem Ipsum</p>
                        <p class="font-weight-normal my-auto">4432</p>
                     </div>
                     <div>
                        <i class="material-icons text-danger position-relative text-lg">grade</i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-3 px-2 col-md-12 ">
                  <div class=" p-0  mt-n4  z-index-2">
                     <a class="d-block ">
                     <img src="{{asset('/assets/img/image 3.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                     </a>
                  </div>
                  <div class="card-footer my-2 d-flex justify-content-between">
                     <div>
                        <h6 class="font-weight-bolder my-auto">Lorem Ipsum</h6>
                        <p class="font-weight-normal my-auto">Lorem Ipsum</p>
                        <p class="font-weight-normal my-auto">4432</p>
                     </div>
                     <div>
                        <i class="material-icons text-lg ms-auto">star_outline</i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div  class="row mt-5 ">
      <div class="col-lg-12 col-md-12 d-flex ">
         <div class="col-lg-3  position-relative col-sm-3 px-2 col-md-12  ">
            <div class="  mt-n4  z-index-2">
               <a class="d-block ">
               <img src="{{asset('/assets/img/image 5.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
               </a>
            </div>
            <div class="card-footer my-2 d-flex justify-content-between">
               <div>
                  <h6 class="font-weight-bolder my-auto">Lorem Ipsum</h6>
                  <p class="font-weight-normal my-auto">Lorem Ipsum</p>
                  <p class="font-weight-normal my-auto">4432</p>
               </div>
               <div>
                  <i class="material-icons text-danger position-relative text-lg">grade</i>
                  <!-- <i class="material-icons position-relative text-lg me-1 my-auto">place</i> -->
               </div>
            </div>
         </div>
         <div class="col-lg-3  col-sm-3 px-2 col-md-12  ">
            <div class=" p-0  mt-n4  z-index-2">
               <a class="d-block ">
                  <img src="{{asset('/assets/img/image 6.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                  <!-- <img src="../../assets/img/products/product-1-min.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"> -->
               </a>
            </div>
            <div class="card-footer my-2 d-flex justify-content-between">
               <div>
                  <h6 class="font-weight-bolder my-auto">Lorem Ipsum</h6>
                  <p class="font-weight-normal my-auto">Lorem Ipsum</p>
                  <p class="font-weight-normal my-auto">4432</p>
               </div>
               <div>
                  <i class="material-icons text-lg ms-auto">star_outline</i>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-3 px-2 col-md-12  ">
            <div class=" p-0 mt-n4  z-index-2">
               <a class="d-block ">
               <img src="{{asset('/assets/img/image 2.jpg')}}" alt="img-blur-shadow" class="img-fluid border-radius-lg w-250 ">
               </a>
            </div>
            <div class="card-footer my-2 d-flex justify-content-between">
               <div>
                  <h6 class="font-weight-bolder my-auto">Lorem Ipsum</h6>
                  <p class="font-weight-normal my-auto">Lorem Ipsum</p>
                  <p class="font-weight-normal my-auto">4432</p>
               </div>
               <div>
                  <i class="material-icons text-danger position-relative text-lg">grade</i>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-3 px-2 col-md-12 ">
            <div class=" p-0  mt-n4  z-index-2">
               <a class="d-block ">
               <img src="{{asset('/assets/img/image 4.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
               </a>
            </div>
            <div class="card-footer my-2 d-flex justify-content-between">
               <div>
                  <h6 class="font-weight-bolder my-auto">Lorem Ipsum</h6>
                  <p class="font-weight-normal my-auto">Lorem Ipsum</p>
                  <p class="font-weight-normal my-auto">4432</p>
               </div>
               <div>
                  <i class="material-icons text-lg ms-auto">star_outline</i>
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
</div>
@endsection
