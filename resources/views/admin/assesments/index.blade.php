<x-app-layout>
    <div class="container-fluid">
        <nav>
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><h6>ASSESMENTS</h6></li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid py-4">
        <div class="col-md-10">
            <div class="card mt-4" >
            <div class="pt-5 px-5">
              <h5 style="color:#087807">Assesments</h5>
            </div>
              <div class="row mx-5 py-4">
               <form action="{{ route("assesments.store") }}" method="post">
                @csrf
                  <div class="col-12 d-flex py-3">

                          <div class="col-2 "><p>Question</p></div>
                          <select class="form-control" name="question_id" id="choices-category-edit">
                            <option value="1" selected >How do you want to feel today</option>
                            <option value="2" >How do you want to feel yesterday</option>

                          </select>

                        </div>

                        <div class="col-12 d-flex py-3">
                              <div class="col-2  "><p>Type</p></div>
                              <select class="form-control" name="type" id="choices-category-edit">
                                <option value="Recretional" selected >Recretional</option>
                                <option value="Medical" >Medical</option>
                              </select>
                            </div>
                          <div class="row pt-3 ">
                            <div class="customer_records px-1">
                                <table class="table table-bordered" id="dynamicAddRemove" style=" border: none;">
                                    <tr style=" border: none;">
                                        <th style=" border: none;">Image</th>
                                        <th style=" border: none;">Title</th>
                                        <th style=" border: none;">Action</th>
                                    </tr>
                                    <tr style=" border: none;">
                                        <td style=" border: none;"><input type="file" name="addMoreInputFields[0][image]"  class="form-control" />
                                        </td>
                                        <td style=" border: none;"><input type="text" name="addMoreInputFields[0][title]" placeholder="Enter title" class="form-control" />
                                        </td>
                                        <td style=" border: none;"><button type="button" style=" border: none;" name="add" id="dynamic-ar" class="btn btn-primary">Add More</button></td>
                                    </tr>
                                </table>
                            </div>
                            </div>
                            </div>
                            <script type="text/javascript">
                                var i = 0;
                                $("#dynamic-ar").click(function () {
                                    ++i;
                                    $("#dynamicAddRemove").append('<tr style=" border: none;"><td style=" border: none;"><input type="file" name="addMoreInputFields[' + i +
                                        '][image]"  class="form-control" /></td><td style=" border: none;"><input type="text" name="addMoreInputFields[' + i +
                                        '][title]" placeholder="Enter title" class="form-control" /></td><td style=" border: none;"><button type="button" style=" border: none;" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
                                        );
                                });
                                $(document).on('click', '.remove-input-field', function () {
                                    $(this).parents('tr').remove();
                                });
                            </script>

                                <div class="d-flex  " style="justify-content:end;">  <div>
                                    <button type="button" class="btn bg-gradient-light mx-3  mb-2">Cancel </button>
                                </div>
                                <div >
                                <button type="submit" class="btn bg-gradient-success mx-3 mb-2">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
