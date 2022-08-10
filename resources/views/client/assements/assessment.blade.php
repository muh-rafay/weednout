@extends('layouts.client') @section('content')
<style>
    .cardhv:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
        background-color: #d0dfed;
        cursor: pointer;
        color: white;
    }
</style>
<div class="container-fluid ">
	<nav>
		<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
			<li class="breadcrumb-item text-sm text-dark active" aria-current="page">
				<h6>Assessments</h6></li>
		</ol>
	</nav>
</div>
<div class="container-fluid">
    <div class="row " style="padding-top:5rem">
      <!-- <div class="col-lg-12 position-relative " style="justify-content: center;"> -->
        <p class="text-lg  mb-0 text-center pb-5" style="font-size: 13rem;font-weight: bold;">LOREM IPSUM IS A DUMMY TEXT</p>
        <div class="row "  style="justify-content: center;">
          <div class="col-lg-3 col-md-6 col-sm-6 mt-sm-0 mt-4">
            <div class="card  mb-2 cardhv text-center" >
              <a class="nav-link text-success  " href="{{ route('get.assessment',['link' => base64_encode('Recreational')]) }}">
                <!-- <div class="form-check  mt-2" style="justify-content:left;"> -->
                  <!-- <input class="form-check-input" type="checkbox" id="customCheck1" > -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" style="margin-inline:5rem ;margin-block:2.5rem;font-weight:bold;position:relative" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 500.907 500.907" style="enable-background:new 0 0 500.907 500.907;justify-content:center" xml:space="preserve">
                    <g transform="translate(1 1)">
                      <g>
                        <path  fill="#087807" d="M497.347,134.253c-3.413-3.413-8.533-3.413-11.947,0c-2.366,2.366-4.717,4.558-7.061,6.592L357.577,20.083    c1.809-2.04,3.734-4.088,5.797-6.15c3.413-3.413,3.413-8.533,0-11.947c-3.413-3.413-8.533-3.413-11.947,0    c-22.054,22.47-31.118,43.928-32.839,68.228c-0.484,1.424-0.563,2.928-0.233,4.378c-0.745,21.241,3.712,44.763,9.767,73.037    c-23.72-4.318-46.043-5.644-66.311-4.142c-2.321-1.108-4.812-0.89-7.065,0.652c-27.398,2.999-50.7,11.386-68.155,24.726    c-1.176,0.418-2.294,1.105-3.27,2.081c-0.517,0.517-0.946,1.077-1.307,1.661c-1.607,1.396-3.177,2.823-4.667,4.313    c-17.21,17.21-24.818,38.313-25.927,64.58c-0.641,1.713-0.691,3.557-0.137,5.289c-0.195,20.22,3.148,43.391,8.762,70.08    C87.569,302.675,39.573,313.84,1.56,351.853c-3.413,3.413-3.413,8.533,0,11.947c1.707,1.707,3.413,2.56,5.973,2.56    s4.267-0.853,5.12-1.707c4.414-4.414,8.943-8.398,13.619-11.981l119.611,119.61c-3.386,4.37-7.107,8.595-11.203,12.691    c-3.413,3.413-3.413,8.533,0,11.947c1.707,1.707,3.413,2.56,5.973,2.56c1.707,0,4.267-0.853,6.827-3.413    c37.639-37.639,48.971-85.05,35.412-156.336c63.463,13.15,106.904,13.167,137.815-17.744    c31.443-30.637,41.544-86.417,28.891-152.935c64.359,13.825,104.908,19.99,147.749-22.852    C500.76,142.787,500.76,137.667,497.347,134.253z M464.59,150.99c-11.387,6.947-22.995,10.486-35.782,11.588    c-0.383-0.661-0.856-1.292-1.435-1.872L335.136,69.3c1.228-12.729,4.938-24.263,12.128-35.636L464.59,150.99z M403.211,162.034    c-16.427-1.745-35.097-5.78-57.363-10.722c-4.943-22.564-8.913-41.307-10.473-57.725L403.211,162.034z M331.907,165.259    c3.894,18.897,5.872,36.906,5.994,53.602l-59.126-59.126C295.391,159.703,313.257,161.51,331.907,165.259z M320.01,295.69    L202.616,178.296c14.555-9.258,33.356-15.155,55.073-17.46l76.67,76.67c0.862,0.862,1.726,1.505,2.698,1.932    C335.006,261.643,329.237,280.792,320.01,295.69z M169.395,266.248l63.446,63.447c-15.963-1.391-33.895-4.533-53.977-8.827    C174.228,300.548,170.896,282.401,169.395,266.248z M164.106,335.68c4.011,19.615,6.203,37.148,6.547,52.999l-60.119-60.119    C126.51,329.095,144.225,331.505,164.106,335.68z M40.698,343.204c13.83-7.66,29.098-12.258,46.608-13.979l82.432,82.432    c-1.914,17.425-6.666,32.607-14.321,46.266L40.698,343.204z M257.335,330.295L168.66,241.62    c1.015-21.973,7.209-39.328,20.634-52.753l120.298,120.298c-0.279,0.289-0.548,0.592-0.831,0.875    C295.607,323.193,278.679,329.204,257.335,330.295z"/>
                      </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    </svg>
                  <p class="text-sm mb-3 text-capitalize "  style="font-size: 13rem;font-weight: regular; margin-inline:4rem">Recreational</p>
                 </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-sm-0 mt-4">
              <div class="card  mb-2 cardhv text-center">
                <a class="nav-link text-success  " href="{{ route('get.assessment',['link' => base64_encode('Medical')]) }}">
                  <!-- <div class="form-check  mt-2" style="justify-content:left;">
                    <input class="form-check-input" type="checkbox" id="customCheck1"> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" style="margin-inline:5rem ;margin-block:2.5rem;position:relative" viewBox="0 0 48 48"><title>medical</title><path fill="#087807" d="M31,46H17a3,3,0,0,1-3-3V34H5a3,3,0,0,1-3-3V17a3,3,0,0,1,3-3h9V5a3,3,0,0,1,3-3H31a3,3,0,0,1,3,3v9h9a3,3,0,0,1,3,3V31a3,3,0,0,1-3,3H34v9A3,3,0,0,1,31,46ZM18,42H30V30H42V18H30V6H18V18H6V30H18V42Z" fill="#2161ff"/><rect width="48" height="48" fill="none"/></svg>
                    <p class="text-sm mb-3 text-capitalize "  style="font-size: 13rem;font-weight: regular;margin-inline:5rem">Medical</p>
                    </a>
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