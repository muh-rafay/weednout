@extends('layouts.client') @section('content')

<div class="container-fluid">
    <div class="col-md-10">
        <div class="card mt-4" id="basic-info">
            <div class="card-header">
                <h5 style="color: #087807;">Update Profile</h5>
            </div>
            <div class="row mx-5">
                <form action="{{ route('client_profiles.update',$user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="d-flex">
                    <div class="col-md-6 d-flex">
                        <div class="col-md-2 pt-3"><p>Name</p></div>
                        <div class="col-md-9">
                            <div class="input-group input-group-outline my-2">
                                <input type="text" name="name" class="form-control" value="{{  $user->name }}" aria-label="text" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="col-2 pt-3"><p>Email</p></div>
                        <div class="col-md-9">
                            <div class="input-group input-group-outline my-2">
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control" aria-label="text" />
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="d-flex">
                    <div class="col-md-6 d-flex">
                        <div class="col-md-2 pt-3"><p>  Gender</p></div>
                        <div class="col-md-9">
                            <div class="input-group input-group-outline my-2 ">
                                <input type="text" name="gender" value="{{ $user->gender }}" class="form-control" aria-label="text" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="col-md-2 pt-3"><p>Zipcode</p></div>
                        <div class="col-md-9">
                            <div class="input-group input-group-outline my-2 ">
                                <input type="text" name="zipcode" value="{{ $user->zipcode }}" class="form-control" aria-label="text" />
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-md-6 d-flex">
                            <div class="col-2 pt-3"><p>Height</p></div>
                            <div class="col-md-9">
                                <div class="input-group input-group-outline my-2">
                                    <input type="text" name="height" value="{{ $user->height }}" class="form-control" aria-label="text" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="col-md-2 pt-3"><p>Weight</p></div>
                            <div class="col-md-9">
                                <div class="input-group input-group-outline my-2">
                                    <input type="text" name="weight" value="{{ $user->weight }}" class="form-control" aria-label="text" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-md-6 d-flex">
                            <div class="col-3 pt-3"><p>Hair Colour</p></div>
                            <div class="col-md-8">
                                <div class="input-group input-group-outline my-2">
                                    <input type="text" name="haircolor" value="{{ $user->haircolor }}" class="form-control" aria-label="text" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ml-2">
                            <div class="col-md-2 pt-3"><p>Image</p></div>
                            <div class="col-md-9">
                                <div class="input-group input-group-outline my-2">
                                    <input type="file" name="image"  class="form-control" aria-label="text" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex" style="justify-content: end;">

                        <div>
                            <button type="submit" class="btn bg-gradient-success mx-3 mb-2">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
