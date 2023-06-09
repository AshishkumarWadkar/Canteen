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
                <div class="text-end mx-3 mt-2">
                <a href="{{ route('menu_master.create') }}"><button class="btn btn-info mb-0">Add Menu</button></a>
                </div>
                <div class="card-body pt-0">
                  <div class="table-responsive">
                    <table class="table text-center mb-0 datatable">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                          <th class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                          <th class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type</th>
                          {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Veg</th> --}}
                          <th class="text-start text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>

                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($menu as $key => $m )


                        <tr>
                          <td scope="row">{{ $key+1 }}</td>
                             <td class="text-start">{{ $m->name }}</td>
                             <td class="text-start">{{ $m->type == 0 ? "Breakfast" :"" }} {{ $m->type == 1 ? "Lunch" : "" }}</td>
                             {{-- <td>{{ $m->veg_nonveg == 0 ? "Veg" : "NonVeg" }}</td> --}}
                             <td class="text-start">{{ $m->description }}</td>
                             <td>{{  \Carbon\Carbon::parse($m->created_at)->format('d-m-Y') }}</td>
                          <td>
                                <a href="{{ route('menu_master.edit',$m->id) }}"><button class="btn btn-sm btn-primary py-0">Edit</button></a>
                                {{-- <button class="btn btn-sm py-0 btn-danger ">Delete</button>s --}}
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

@endsection
