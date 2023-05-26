@extends('layouts.mess.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">All Menus </h6>
                  </div>
                </div>
                <div class="text-end mx-3 my-2">
                <a href="{{ route('menu_master.create') }}"><button class="btn btn-info">Add Menu</button></a>
                </div>
                <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table text-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Veg</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>

                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($menu as $key => $m )


                        <tr>
                          <td scope="row">{{ $key+1 }}</td>
                             <td>{{ $m->name }}</td>
                             <td>{{ $m->type == 0 ? "Break Fast" :"" }} {{ $m->type == 1 ? "Lunch" : "" }}</td>
                             <td>{{ $m->veg_nonveg == 0 ? "Veg" : "NonVeg" }}</td>
                             <td>{{ $m->description }}</td>
                             <td>{{  \Carbon\Carbon::parse($m->created_at)->format('d-m-Y') }}</td>
                          <td>
                                <a href="{{ route('menu_master.edit',$m->id) }}"><button class="btn btn-primary">Edit</button></a>
                                <button class="btn btn-danger ">Delete</button>
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

    <script src="../../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>

@endsection
