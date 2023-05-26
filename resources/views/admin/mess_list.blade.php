@extends('layouts.admin.app')

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

                        <table class="table table-striped table-responsive">
                            <thead class="thead-dark ">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Added On</th>
                                <th scope="col">Action</th>

                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($mess as $key => $s )


                            <tr>
                              <th scope="row">{{ $key+1 }}</th>
                              <td>{{ $s->name }}</td>
                              <td>{{ $s->email }}</td>
                              <td>{{  \Carbon\Carbon::parse($s->created_at)->format('d-m-Y') }}</td>
                              <td>
                                    <a href="{{ route('mess.edit',$s->id) }}"><button class="btn btn-xs btn-primary py-0 mx-2">Edit</button></a>
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
