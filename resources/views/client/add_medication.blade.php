<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
<x-guest-layout>
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container-fluid"  style="margin-top:10%;">
            <div class="row " style="padding-top:5rem">
              <div class="col-lg-12 position-relative " style="justify-content: center;">
                 <div class="row "  style="justify-content: center;">
                    <div class="col-lg-3 col-md-8 col-sm-8 mt-sm-0 mt-4">
                        <div class="card  mb-2 cardhv text-center" >
                            <div class="nav-link text-success mx-4 " href="">
                                <label class="form-label"><h5>ARE YOU ON MEDICATION...?</h5></label>
                                <form action="{{ route('store.medication') }}" method="POST">
                                    <input type="hidden" name="user_id" value="{{ $user_id }}">
                                    @csrf
                                    @if ($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    @if (Session::has('success'))
                                    <div class="alert alert-success text-center">
                                        <p>{{ Session::get('success') }}</p>
                                    </div>
                                    @endif

                                    <table class="table table-bordered" id="dynamicAddRemove" style=" border: none;">
                                        <tr style=" border: none;">
                                            <th style=" border: none;">Enter Medicine</th>
                                            <th style=" border: none;"></th>
                                        </tr>
                                        <tr style=" border: none;">
                                            <td style=" border: none;"><input type="text" name="addMoreInputFields[0][name]" placeholder="Enter subject" class="form-control" />
                                            </td>
                                            <td style=" border: none;"><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Subject</button></td>
                                        </tr>
                                    </table>
                                    <button style=" border: none;" type="submit" class="btn btn-outline-success btn-block">Save</button>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr style=" border: none;"><td style=" border: none;"><input type="text" name="addMoreInputFields[' + i +
            '][name]" placeholder="Enter subject" class="form-control" /></td><td style=" border: none;"><button type="button" style=" border: none;" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
</x-guest-layout>
