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
          <h5 style="color:#087807"> Create Strain</h5>
        </div>
        <div class="row mx-5">
           <form action="{{ route('strains.store') }}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="col-12  d-flex">
                  <div class="col-2  pt-4"><p>Title</p></div>
                  <div class="col-md-10">
                      <div class="input-group input-group-outline my-2">

                        <input  type="text" name="title" class="form-control" aria-label="text">
                        <!-- <select class="form-control" name="choices-questions" id="choices-questions">
            <option value="Question 1">Question 1</option>
            <option value="Question 2">Question 2</option>
            <option value="Question 3">Question 3</option>
            <option value="Your Question" disabled>Your Question</option>
          </select> -->
          <select class="form-control" name="choices-gender" id="choices-gender">
                              <option value="Question 1" selected >Question 1</option>
                                <option value="Question 1" >Question 1</option>
                                <option  value="Question 3">Question 1</option>
                                <option value="French" >Question 1</option>
                               </select>
                      </div>
                    </div>
              </div>

              <div class="col-12 my-2 d-flex">
                  <div class="col-2   pt-3"><p>Terpene Name</p></div>
                    <div class="col-md-10">
                    <div class="input-group input-group-outline  my-2">
                              <select class="form-control" name="choices-gender" id="choices-gender">
                              <option  value="English" selected >Camphane</option>
                                <option value="French" >Camphane</option>
                                <option value="French"  >Camphane</option>
                                <option value="French" >Camphane</option>
                               </select>
                                 </div>
                        <!-- <select class="form-control" name="terpeneName" id="choices-category-edit">
                        <option value="English" selected >Camphane</option>
                        <option value="French" >Camphane</option>
                        <option value="French" >Camphane</option>
                        <option value="French" >Camphane</option>
                        </select> -->
                    </div>
              </div>

              <div class="col-12  my-2 d-flex">
                <div class="col-2  pt-3 "><p>Type of Strain</p></div>
                <div class="col-md-10">
                <div class="input-group input-group-outline  my-2">
                              <select class="form-control" name="choices-gender" id="choices-gender">
                              <option  value="English"  selected >Hybride 50/50</option>
                                <option value="French" >Hybride 50/50</option>
                                <option value="French" >Hybride 50/50</option>
                                <option value="French" >Hybride 50/50</option>
                               </select>
                                 </div>
                  <!-- <select class="form-control" name="typeofstrain" id="choices-category-edit">
                    <option value="English" selected >Hybride 50/50</option>
                    <option value="French" >Hybride 50/50</option>
                    <option value="French" >Hybride 50/50</option>
                    <option value="French" >Hybride 50/50</option>
                  </select> -->
                  </div>
            </div>

              <div class="col-12 d-flex">
                <div class="col-2   pt-3"><p>Effects</p></div>
                <div class="col-md-10">
                    <div class="input-group input-group-outline">
                        <div class="col-md-12">
                            <select name="effect" multiple="" class="form-control pb-4" id="exampleFormControlSelect2">
                                @foreach ($assesments as $assesment)
                                <option value="{{ $assesment->title }}">{{ $assesment->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="col-12 d-flex">
                <div class="col-2  pt-3 "><p>Side Effects</p></div>
                <div class="col-md-10">
                    <div class="input-group input-group-outline  my-2">
                      <input  type="text" name="sideeffects" class="form-control" aria-label="text">
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex">
                <div class="col-2  pt-3 "><p>Terpene Profile</p></div>
                <div class="col-md-10">
                    <div class="input-group input-group-outline  my-2">

                      <input  type="text" name="Terpeneprofile" class="form-control" aria-label="text">
                    </div>
                  </div>
            </div>
            <div class="col-12 d-flex">
                <div class="col-2   pt-3"><p>Image</p></div>
                <div class="col-md-10">
                    <div class="input-group input-group-outline  my-2">
                      <label class="form-label" for="customFile"> </label>
                      <input type="file" name="image" class="form-control" id="customFile" />
                    </div>
                  </div>
            </div>
          <div class="d-flex  " style="justify-content:end;">  <div>
              <button type="button" class="btn bg-gradient-light mx-3  mb-2">Cancel </button>
            </div>
            <div >
              <button type="submit" class="btn bg-gradient-success mx-3 mb-2">Add</button>
            </div></div>


        </form></div>

      </div></div>

        </div>
      </div>

    </div>
</x-app-layout>
