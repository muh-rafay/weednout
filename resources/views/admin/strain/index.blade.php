<x-app-layout>
    <div class="container-fluid">
        <nav>
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><h6>STRAINS</h6></li>
            </ol>
        </nav>
    </div>
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
              <div class="card-header">
                <div class="d-lg-flex">
                  <div>
                    <h5 class="mb-0">Strain</h5>
                  </div>
                    <div class="ms-auto my-auto mt-lg-0 mt-4">
                    <div class="ms-auto my-auto ">
                        <a href="{{ route('strains.create') }}" style="color: #fff;" class="btn   bg-gradient-success btn-sm mb-0">+&nbsp; Add Strain</a>
                    </div>
                    </div>
                </div>
              </div>

              <!-- Card header -->
              <div class="card-body px-0 pb-0">
                <div class="table-responsive">
                    <table class="table table-flush" id="datatable-basic">
                        <thead class="thead-light">
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Title</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Terpene Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Effects</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Types</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Side Effects</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($strains as $strain)
                        <tr>
                            <td class="text-sm font-weight-normal">##0{{ $strain->id }}</td>
                            <td class="text-sm font-weight-normal">{{ $strain->name }}</td>
                            <td class="text-sm font-weight-normal">{{ $strain->terpeneName }}</td>
                            <td class="text-sm font-weight-normal">{{ $strain->effect }}</td>
                            <td class="text-sm font-weight-normal">{{ $strain->typeofstrain }}</td>
                            <td class="text-sm font-weight-normal">{{ $strain->sideeffects }}</td>
                            <td class="text-sm font-weight-normal d-flex">

                                <a href="{{ route('strains.edit',$strain->id) }}">
                                    <i class="material-icons  text-primary position-relative text-lg">visibility</i>
                                </a>
                                <form action="{{ route('strains.destroy',$strain->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                       <button type="submit" class="d-flex bg-gradient-success"> <i class="material-icons  text-primary  position-relative text-lg">delete</i>
                                       </button>
                                </form>

                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</x-app-layout>
