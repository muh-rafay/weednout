@extends('layouts.client') @section('content')
<style>
   .cardhv:hover {
   transform: scale(1.05);
   box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
   background-color: #d0dfed;
   cursor: pointer;
   color: white;
   }
    .ScrollStyle
    {
        max-height: 450px;
        overflow-y: scroll;
        overflow-x: hidden;
    }
</style>
<div class="container-fluid ">
   <nav>
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
         <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
            <h6>Strains</h6>
         </li>
      </ol>
   </nav>
</div>
<div class="row " style="padding-top:2rem">
<!-- <ol  class="breadcrumb "  style="justify-content: center;"><li class="breadcrumb-item text-sm">Assesments</li>
   <li class="breadcrumb-item text-sm">Recreational</li></ol> -->
<p class="text-lg  mb-0 text-center pb-2" style="font-size: 13rem;font-weight: bold;">Assesments</p>
<p class="text-lg  mb-0 text-center pb-2" style="font-size: 13rem;font-weight: bold;">Here are the strain that match your needs</p>
<!-- <p class="text-sm mb-0 text-center pb-2">Select three at most</p>   -->
<div class="row " style="justify-content: center;">
<div class="col-10"  style="padding-inline: 2rem;">
   <div class="border border-grey border-1 border-radius-md py-1 ScrollStyle">
      <div class="row ">
         <div class="col-12  px-3 d-flex" style="justify-content:space-between ;">
            <div class="col-lg-3 col-md-6 col-sm-6 mx-1  mt-sm-0  mt-4">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5" style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mx-1  mt-sm-0  mt-4">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2 pl-4 mt-5  " style="color:#fff;padding-left:1rem;">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mx-1  mt-sm-0  mt-4">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5" style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mx-1  mt-sm-0  mt-4">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5" style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12 px-3 pt-2  d-flex" style="justify-content:space-between ;">
            <div class="col-lg-3 col-md-6 col-sm-6  mx-1 mt-sm-0 mt-4">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5" style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  mx-1 mt-sm-0 mt-4">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5 " style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mx-1 mt-sm-0 mt-4">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5 " style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  mx-1 mt-sm-0 mt-4">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5 " style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12 px-3 pt-2  d-flex" style="justify-content:space-between ;">
            <div class="col-lg-3 col-md-6 col-sm-6  mx-1 mt-sm-0 mt-4">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5 " style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  mx-1 mt-sm-0 mt-4">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5 pl-2" style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mx-1 mt-sm-0 mt-4">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5 pl-2" style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  mx-1 mt-sm-0 mt-4">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5 pl-2" style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12 px-3 pt-2  d-flex" style="justify-content:space-between ;">
            <div class="col-lg-3 col-md-6 col-sm-6  mx-1 mt-sm-0 mt-4">
               <div class="card">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5 " style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  mx-1 mt-sm-0 mt-4">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5 " style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mx-1 mt-sm-0 mt-4">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5 " style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  mx-1 mt-sm-0 mt-5">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5 " style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12 px-3 pt-2  d-flex" style="justify-content:space-between ;">
            <div class="col-lg-3 col-md-6 col-sm-6  mx-1 mt-sm-0 mt-4">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5 " style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  mx-1 mt-sm-0 mt-4">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5 " style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mx-1 mt-sm-0 mt-4">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5 " style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  mx-1 mt-sm-0 mt-4">
               <div class="card ">
                  <div class="overflow-hidden position-relative border-radius-lg bg-cover  py-5"  style="background-image: url('../../assets/img/image 12.jpg');" class="img-fluid shadow border-radius-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <div class="card-body position-relative d-flex   ">
                        <larg class="mask   bg-gradient-dark z-index-1  opacity-2  mt-5 " style="color:#fff;padding-left:1rem">lorm ipsum</larg>
                        <p class="text-white font-weight-bolder"></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="col-10">
   <div class="d-flex  pt-4 " style="justify-content:end;">
      <div>
         <a href="../../pages/dashboards/Recreational.html">
         <button type="button" class="btn bg-gradient-light mx-3  mb-2">Back </button></a>
      </div>
      <div >
         <a href="../../pages/dashboards/generatedstrain.html">
         <button type="button" class="btn bg-gradient-success mx-3 mb-2">Next</button>
         </a>
      </div>
   </div>
</div>
@endsection
