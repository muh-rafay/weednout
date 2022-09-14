@extends('layouts.client') @section('content')
    <style>
        .ScrollStyle {
            max-height: 450px;
            overflow-y: scroll;
            overflow-x: hidden;
        }
    </style>
    <div class="container-fluid ">
        <nav>
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                    <h6>Assessments</h6>
                </li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row " style="padding-top:2rem">
            <p class="text-lg  mb-0 text-center pb-2" style="font-size: 13rem;font-weight: bold;">HOW DO YOU WANT TO FEEL
                TODAY</p>
            <p class="text-sm mb-0 text-center pb-2">Select three at most</p>
            <div class="row  " style="justify-content: center;">
                <div class="col-10 ">
                    <div class="border border-grey border-1 border-radius-md py-1 ScrollStyle  px-2 ">
                        <form method="post" action="{{ route('get.strain') }}">
                            @csrf
                            <div class="row">

                                @foreach ($assessments as $assessment)
                                    <div class="col-lg-3 col-md-6 col-sm-6   mt-sm-0 mt-4">
                                        <div class="card  mb-2 ">
                                            <div class="form-check  mt-2">
                                                <input class="form-check-input chk" value="{{ $assessment->id }}" type="checkbox"
                                                    name="chk[]" onclick="return  myfun()">

                                                <img src="{{ asset($assessment->image) }}" class="avatar"
                                                    style="margin-left:auto !important;
                                        margin-right: auto; !important">
                                                <p class="text-sm mb-3 text-capitalize  "
                                                    style="font-size: 13rem;font-weight: regular;margin-left:2.5rem">
                                                    {{ $assessment->title }}</p>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div>
                                <a href="">
                                    <button type="submit" class="btn bg-gradient-success mx-3 mb-2 float-end mt-4" >Next</button>
                                </a>
                            </div>
                        </form>
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


    <script type="text/javascript">
        function myfun(id) {
            var a = document.getElementsByClass('chk');
            var newvar = 0;


            var count;
            for (count = 0; count < a.length; count++) {
                if (a[count].checked == true) {
                    newvar = newvar + 1;
                }
            }
            if (newvar >= 4) {
                alert("OOPS...! You Select only three Assessments Thank You");
                return false;
            }
        }
    </script>
@endsection
