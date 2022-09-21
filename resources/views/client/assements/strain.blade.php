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
      <div class="row">
         @foreach ($strains as $key => $strain1)
         @foreach ($strain1 as $key => $strain)
         @if(!empty($strain))
         <form method="post" action="{{ route('get.product') }}">
            @csrf
            <div class="col-lg-3 col-md-6 col-sm-6   mt-sm-0 mt-4">
               <div class="card  mb-2 ">
                  <div class="form-check  mt-2">
                     <input class="form-check-input chk" value="{{ $strain->id}}" type="checkbox"
                        name="chk[]" onclick="return  myfun()">
                     <img src="{{ asset($strain->image) }}" class="avatar "
                        style="margin-left:1rem !important;text:center !important
                        margin-right: auto; !important"  data-bs-toggle="modal" data-bs-target="#exampleModal{{ $strain->id}}">
                     <p class="text-sm mb-3 text-capitalize"
                        style="font-size: 13rem;font-weight: regular;margin-left:2.9rem"  data-bs-toggle="modal" data-bs-target="#exampleModal{{ $strain->id}}">
                        {{ $strain->name}}
                     </p>
                  </div>
               </div>
            </div>
            <div class="d-flex  pt-4 " style="justify-content:end;">
               <div>
                  <a href="">
                  <button type="button" class="btn bg-gradient-light mx-3  mb-2">Back </button></a>
               </div>
               <div >

                  <button type="submit" class="btn bg-gradient-success mx-3 mb-2">Next</button>

               </div>
            </div>
         </form>
         @endif
         @endforeach
         @endforeach
      </div>
   </div>
   {{-- Modal --}}
   @foreach ($strains as $key => $strain1)
   @foreach ($strain1 as $key => $strain)
   @if(!empty($strain))
   <div class="modal fade ms-4" id="exampleModal{{ $strain->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
         <div class="container-fluid py-4">
            <div class="row">
               <div class="col-12">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="mb-4"> Details</h5>
                        <div class="row">
                           <div class="col-xl-5 col-lg-5 ">
                              <img class="w-100 h-100 border-radius-lg shadow-lg " src="{{ asset($strain->image) }}" alt="chair">
                           </div>
                           <div class="col-xl-7 col-lg-7">
                              <h4 class="mt-1">Feature</h4>
                              <div class="d-flex p" >
                                 <div  class="col-4">
                                    <h6 class="mb-1 font-weight-bolder">
                                       Terpene name
                                    </h6>
                                    <h6 class="mb-1 font-weight-bolder">
                                       Effect
                                    </h6>
                                    <h6 class="mb-1 font-weight-bolder">
                                       Type of Strain
                                    </h6>
                                    <h6 class="mb-1 font-weight-bolder">
                                       Side effect:
                                    </h6>
                                    <h6 class="mb-1 font-weight-bolder">
                                       Terpene Profile
                                    </h6>
                                 </div>
                                 <div >
                                    <p class="mb-1 font-weight-bolder">
                                       {{ $strain->terpeneName}}
                                    </p>
                                    <p class="mb-1 font-weight-bolder">
                                       {{ $strain->effect }}
                                    </p>
                                    <p class="mb-1 font-weight-bolder">
                                    </p>
                                    <p class="mb-1 font-weight-bolder">
                                       {{ $strain->typeofstrain }}
                                    </p>
                                    <p class="mb-1 font-weight-bolder">
                                       {{ $strain->sideeffects }}
                                    </p>
                                    <p class="mb-1 font-weight-bolder">
                                       {{ $strain->Terpeneprofile }}
                                    </p>
                                 </div>
                              </div>
                              <!-- <div class="d-flex " style="justify-content: space-between;"><h6>Terpene name:</h6><p> Camphane</p></div>
                                 <div class="d-flex" style="justify-content: space-between;"><h6 >Effect:</h6><p >Euphoric,creative,Energetic</p></div>
                                 <div class="d-flex" style="justify-content: space-between;"><h6>Taste:</h6><p>Butter,Earthy,Flowery</p></div>
                                 <div class="d-flex" style="justify-content: space-between;"><h6> Type of Strain:</h6><p>Hybride 50/50</p></div>
                                 <div class="d-flex" style="justify-content: space-between;"><h6>Side effect:</h6><p>concern,panic attact</p></div>
                                 <div class="d-flex" style="justify-content: space-between;"><h6>Terpene Profile:</h6><p> 100% (Camphane 15%,Euphoric,creative,Energetic 25,Butter,Earthy,Flowery  15%,Hybride 50/50  25%,concern,panic attact   25%)</p></div>
                                 -->
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
@endif
@endforeach
@endforeach
<!--Wnd Modal  -->
@endsection
