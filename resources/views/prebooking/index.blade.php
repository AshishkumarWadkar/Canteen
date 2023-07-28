@extends('layouts.mess.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Prebooking </h6>
                  </div>
                </div>
                <div class="card-body pt-0 mt-2">
                    <div class="row f-right justify-content-end text-end">
                        <div class="col-6 row">
                            <form class="row" action="{{ route('prebooking.index') }}">
                                <div class="d-inline row">
                                    <div class="col-6 text-end">
                                        <input type="date" class="date form-control" name="date" value="{{ isset($date) ? $date : "" }}">
                                    </div>
                                    <div class="col-6 ">

                                        <button class="btn btn-success btn-sm" type="submit">Get</button>
                                        <a class="btn btn-success btn-sm" href="{{ route("prebooking.index") }}">Reset</a>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                  <div class="table-responsive">
                    <div class="row">
                        <div class="col-3">
                            Total Bookings : {{ $allcount }}
                        </div>
                        <div class="col-3">
                            Breakfast Booking : {{ $breakfastcount }}
                        </div>
                        <div class="col-3">
                            Meal Booking : {{ $meal_count }}
                        </div>

                    </div>

                    <table class="table text-center mb-0 datatable">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                          <th class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                          <th class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                          <th class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type</th>
                          <th class="text-start text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>

                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($prebookings as $key => $pb )


                        <tr>
                          <td scope="row">{{ $key+1 }}</td>
                             <td class="text-start">{{ $pb->user_name }}</td>
                             <td class="text-start">{{ $pb->email }}</td>
                             <td class="text-start">{{ $pb->type == 0 ? "Breakfast" :"" }} {{ $pb->type == 1 ? "Lunch" : "" }}</td>
                             <td class="text-start">{{ $pb->menu_name }}</td>

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
