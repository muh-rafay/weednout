@extends('layouts.dispenser')
@section('content')
<div class="container-fluid ">
    <nav>
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><h6>Create Product</h6></li>
        </ol>
    </nav>
</div>
<div class="container-fluid py-4 ">
    <div class="row">
        <div class="col-12 ">
            <div class="card">
                <div class="card-header">
                    <div>
                        <h5 class="mb-0  " style="color:#087807 ;">Add Products</h5>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('dispenser_products.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row ">
                            <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Ingredient</label>
                                <input type="text" name="ingredient" class="form-control" >
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Feature</label>
                                <input type="text" name="feature" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Price</label>
                                <input type="text"  name="price" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Location</label>
                                    <input type="text" name="location" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Zip Code</label>
                                <input type="text" name="zipcode" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Description</label>
                                    <textarea type="text" class="form-control" name="description""></textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-12">
                                    <div class="input-group input-group-outline  my-3 ">
                                    <label class="form-label" for="customFile">Image</label>
                                    <input type="file" name="image" class="form-control" id="customFile" />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div>
                            <button type="submit" class="btn bg-gradient-success   mx-3 mb-2" style="color:#fff;float: right;">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
