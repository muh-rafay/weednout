@extends('layouts.dispenser')
@section('content')
<div class="container-fluid ">
    <nav>
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><h6>Update Product</h6></li>
        </ol>
    </nav>
</div>
<div class="container-fluid py-4 ">
    <div class="row">
        <div class="col-12 ">
            <div class="card">
                <div class="card-header">
                    <div>
                        <h5 class="mb-0" style="color:#087807 ;">Update Products</h5>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('dispenser_products.update',$product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row ">
                            <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Ingredient</label>
                                <input type="text" name="ingredient" value="{{ $product->ingredient }}" class="form-control" >
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Feature</label>
                                <input type="text" name="feature" value="{{ $product->feature }}" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Price</label>
                                <input type="text"  name="price" value="{{ $product->price }}" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Location</label>
                                    <input type="text" name="location" value="{{ $product->location }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Created_by</label>
                                <input type="text"  value="{{ $product->created_by }}" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label">Description</label>
                                <div class="input-group input-group-outline my-3">

                                    <textarea type="text" class="form-control" name="description"">{{ $product->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-12">
                                    <label class="form-label" for="customFile">Image</label>
                                    <div class="input-group input-group-outline  my-3 ">
                                    <label class="form-label" for="customFile">{{ $product->image }}</label>
                                    <input type="file" name="image" class="form-control" />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div>
                            <button type="submit" class="btn mx-3 mb-2" style="background-color:#087807;color:#fff;float: right;">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
