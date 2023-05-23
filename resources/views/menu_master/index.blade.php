@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('All Student') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <a href="{{ route('menu_master.create') }}"><button class="btn btn-xs btn-primary py-0 mx-2">Add Menu</button></a>

                        <table class="table table-striped table-responsive">
                            <thead class="thead-dark ">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Veg-Nonveg</th>
                                <th scope="col">Description</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($menu as $key => $m )


                            <tr>
                              <th scope="row">{{ $key+1 }}</th>
                                 <td>{{ $m->name }}</td>
                                 <td>{{ $m->type == 0 ? "Break Fast" :"" }} {{ $m->type == 1 ? "Lunch" : "" }}</td>
                                 <td>{{ $m->veg_nonveg == 0 ? "Veg" : "NonVeg" }}</td>
                                 <td>{{ $m->description }}</td>
                                 <td>{{  \Carbon\Carbon::parse($m->created_at)->format('d-m-Y') }}</td>
                              <td>
                                    <a href="{{ route('menu_master.edit',$m->id) }}"><button class="btn btn-xs btn-primary py-0 mx-2">Edit</button></a>
                                    <button class="btn btn-xs btn-danger py-0">Delete</button>
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

@endsection
