<x-app-layout>
    <div class="container-fluid">
        <nav>
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><a href="{{ route('strains.index') }}">Back</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><h6>STRAINS</h6></li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid ">
      <div class="col-md-10"><div class="card mt-4" id="basic-info">
        <div class="card-header">
          <h5 style="color:#087807"> Update Strain</h5>
        </div>
        <div class="row mx-5">
           <form action="{{ route('strains.update',$strain->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
              <div class="col-12  d-flex">
                  <div class="col-2  pt-4"><p>Title</p></div>
                  <div class="col-md-10">
                      <div class="input-group input-group-outline my-2">
                        <input  type="text" name="title" class="form-control" value="{{  $strain->name }}" aria-label="text">
                      </div>
                    </div>
              </div>

              <div class="col-12 my-2 d-flex">
                  <div class="col-2   pt-3"><p>Terpene Name</p></div>
                  <div class="col-md-10">
                  <div class="input-group input-group-outline  my-2">
                    <select class="form-control" name="terpeneName" id="choices-category-edit">

                      <option value="Cam"  @if ($strain->terpeneName = "Cam")
                        selected="selected"
                    @endif >Cam</option>
                      <option value="phane"  @if ($strain->terpeneName = "phane")
                        selected="selected"
                    @endif>phane</option>
                      <option value="hane"  @if ($strain->terpeneName = "hane")
                        selected="selected"
                    @endif>hane</option>
                    </select>
</div>
                    </div>
              </div>

              <div class="col-12  my-2 d-flex">
                <div class="col-2  pt-3 "><p>Type of Strain</p></div>
                <div class="col-md-10">
                <div class="input-group input-group-outline  my-2">
                  <select class="form-control" name="typeofstrain" id="choices-category-edit">
                    <option value="Hybride 50/80"  @if ($strain->typeofstrain = "Hybride 50/80")
                        selected="selected"
                    @endif>Hybride 50/80</option>
                    <option value="Hybride 50/70" @if ($strain->typeofstrain = "Hybride 50/70")
                        selected="selected"
                    @endif>Hybride 50/70</option>
                    <option value="Hybride 50/60"  @if ($strain->typeofstrain = "Hybride 50/60")
                        selected="selected"
                    @endif >Hybride 50/60</option>
                  </select>
</div>
                  </div>
            </div>

              <div class="col-12 d-flex">
                <div class="col-2   pt-3"><p>Effects</p></div>
                <div class="col-md-10">
                    <div class="input-group input-group-outline  my-2">

                      <input  type="text" name="effect" value="{{ $strain->effect }}" class="form-control" aria-label="text">
                    </div>
                  </div>
            </div>
            <div class="col-12 d-flex">
                <div class="col-2  pt-3 "><p>Side Effects</p></div>
                <div class="col-md-10">
                    <div class="input-group input-group-outline  my-2">

                      <input  type="text" name="sideeffects" value="{{ $strain->sideeffects }}" class="form-control" aria-label="text">
                    </div>
                  </div>
            </div>
            <div class="col-12 d-flex">
                <div class="col-2  pt-3 "><p>Terpene Profile</p></div>
                <div class="col-md-10">
                    <div class="input-group input-group-outline  my-2">

                      <input  type="text" name="Terpeneprofile"  value="{{ $strain->Terpeneprofile }}" class="form-control" aria-label="text">
                    </div>
                  </div>
            </div>
            <div class="col-12 d-flex">
                <div class="col-2   pt-3"><p>Image</p></div>
                <div class="col-md-10">
                    <div class="input-group input-group-outline  my-2">
                      <label class="form-label" for="customFile">{{ $strain->image }} </label>

                      <input type="file" name="image" value="{{ $strain->image }}" class="form-control" id="customFile" />
                    </div>
                  </div>
            </div>
          <div class="d-flex  " style="justify-content:end;">  <div>
              <button type="button" class="btn bg-gradient-light mx-3  mb-2">Cancel </button>
            </div>
            <div >
              <button type="submit" class="btn bg-gradient-success mx-3 mb-2">Update</button>
            </div></div>


        </form></div>

      </div></div>

        </div>
      </div>

    </div>
</x-app-layout>
