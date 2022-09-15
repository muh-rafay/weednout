<x-app-layout>
    <div class="container-fluid">
        <nav>
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><h6>PRODUCTS</h6></li>
            </ol>
        </nav>
    </div>
    @foreach ($products as $product)
    <div class="modal fade ms-4" id="exampleModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
          <div class="container-fluid py-4">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="mb-4">Product Details</h5>
                    <div class="row">
                      <div class="col-xl-5 col-lg-6 text-center">
                        <img class="w-100 h-100 border-radius-lg shadow-lg " src="{{asset($product->image)}}" alt="chair">

                      </div>
                      <div class="col-lg-5 mx-auto">
                        <h3 class="mt-lg-0 mt-1">{{ $product->name}}</h3>
                        <h6 class="mb-0 mt-1">Item :{{ $product->ingredient }}</h6>
                        <h5>zip code: {{$product->zipcode}}</h5>
                        {{-- <div class="rating">
                          <i class="material-icons text-lg">grade</i>
                          <i class="material-icons text-lg">grade</i>
                          <i class="material-icons text-lg">grade</i>
                          <i class="material-icons text-lg">grade</i>
                          <i class="material-icons text-lg">star_outline</i>
                        </div> --}}
                        <br>
                        <h4 class="mt-  1">Freature</h4>
                        <div class="d-flex"><h6>{{ $product->feature }}</h6></div>
                        {{-- <div class="d-flex"><p >Type of Strain:  </p><h6 >indica</h6></div>   
                        <div class="d-flex"><p >Effect:  </p><h6 >giggly,talkative,Happy</h6></div>
                        <div class="d-flex"><p >Taste:   </p><h6>Berry,Earthy</h6></div>
                        <div class="d-flex"><p >Side effect:   </p><h6>concern,panic attact</h6></div> --}}
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
    @endforeach
    <div class="col-md-2 mr-4">
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
    </div>
    <div class="container-fluid py-4">

        <div class="row">
            <div class="col-12">
            <div class="card">
                {{-- <div class="card-header">
                    <div class="d-lg-flex">
                        <div>
                            <h5 class="mb-0">Products</h5>
                        </div>
                    </div>
                </div> --}}

                <!-- Card header -->
                <div class="card-body px-0 pb-0">
                <div class="table-responsive">
                    <table class="table table-flush" id="datatable-basic">
                        <thead class="thead-light">
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Title</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Ingredients</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Feature</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Description</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Price</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td class="text-sm font-weight-normal">##0 {{ $product->id }}</td>
                            <td class="text-sm font-weight-normal">{{ $product->name }}</td>
                            <td class="text-sm font-weight-normal">{{ $product->ingredient }}</td>
                            <td class="text-sm font-weight-normal">{{ $product->feature }}</td>
                            <td class="text-sm font-weight-normal">{{ $product->description }}</td>
                            <td class="text-sm font-weight-normal">{{ $product->price }}</td>
                            <td class="text-sm font-weight-normal d-flex">
                                <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                    <i class="material-icons text-info position-relative text-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal{{ $product->id }}">visibility</i>
                                    </a>
                                    <form action="{{ route('products.destroy',$product->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                           <button type="submit" > 
                                            <a><i class="material-icons  text-primary position-relative text-lg">delete</i></a> 
                                           </button>
                                    </form>
                            </td>
                            <!-- <td class="text-sm font-weight-normal d-flex">
                                    <a href="javascript" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                        <i class="material-icons text-info position-relative text-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal{{ $product->id }}" >visibility</i>
                                      </a>
                                      <form action="{{ route('products.destroy',$product->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                      <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
                                        <i class="material-icons  text-primary position-relative text-lg">delete</i>
                                    </a>
                                    </form>

                                </td> -->
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
    <div>

</x-app-layout>
