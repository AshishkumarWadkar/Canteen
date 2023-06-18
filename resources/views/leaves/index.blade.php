@extends('layouts.mess.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">leaves </h6>
                  </div>
                </div>
                <div class="card-body pt-0 mt-2">
                  <div class="table-responsive">
                    <div class="row">
                        <div class="col-3">
                            Count : {{ $count }}
                        </div>

                        <div class="col-8">
                            <form action="{{ route('leaves.index') }}">
                                <div class="d-flex">
                                    <div class="col-3"><input type="date" class="date form-control" name="date" value="{{ isset($date) ? $date : "" }}"></div>
                                    <div class="col-3"><button class="btn btn-success btn-sm" type="submit">Get</button></div>
                                    <div class="col-3"><a class="btn btn-success btn-sm" href="{{ route("leaves.index") }}">Reset</a></div>

                                </div>
                            </form>
                        </div>

                    </div>
                    <table class="table text-center mb-0 datatable">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                          <th class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                          <th class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Leave Date</th>

                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($leaves as $key => $lv )
                        <tr>
                          <td scope="row">{{ $key+1 }}</td>
                             <td class="text-start">{{ $lv->name }}</td>
                             <td class="text-start">{{ $lv->leave_date }}</td>


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
