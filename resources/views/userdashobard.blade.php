@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            Name of Student : {{ $students->name }}
                        </div>
                        <div class="row">
                            Phone : {{ $students->email }}
                        </div>
                        <div class="row">
                            Points : {{ $students->points }}
                        </div>
                        <div class="row">
                            Barcode : {{ $students->barcode }}
                        </div>
                        <div class="row">
                            <div class="mb-3">{!! DNS1D::getBarcodeHTML($students->barcode, 'PHARMA') !!}</div>
                        </div>
                        <a href="/payment" class="btn btn-block btn-primary">Top Up</a>

<br>


                        Today Punching Details :

                        <table class="table table-striped table-responsive">
                            <thead class="thead-dark ">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Puching</th>
                                    <th scope="col">Meal Type</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($todays_punch as $key => $tp)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $tp->punch_time }}</td>
                                        <td>{{ $tp->meal_type == 1 ? "BreakFast" : "Meal" }}</td>


                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                        Weekly Menus :
                        <table class="table table-striped table-responsive">
                            <thead class="thead-dark ">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Day</th>
                                    <th scope="col">Menu</th>

                                </tr>
                            </thead>
                            <tbody>

                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Monday</td>
                                        <td>{{ \App\Models\MenuMaster::findOrFail($week_menus->monday)->name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Tuesday</td>
                                        <td>{{ \App\Models\MenuMaster::findOrFail($week_menus->tuesday)->name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Wednesday</td>
                                        <td>{{ \App\Models\MenuMaster::findOrFail($week_menus->wednesday)->name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Thursday</td>
                                        <td>{{ \App\Models\MenuMaster::findOrFail($week_menus->thursday)->name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Friday</td>
                                        <td>{{ \App\Models\MenuMaster::findOrFail($week_menus->friday)->name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Saturday</td>
                                        <td>{{ \App\Models\MenuMaster::findOrFail($week_menus->saturday)->name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Sunday</td>
                                        <td>{{ \App\Models\MenuMaster::findOrFail($week_menus->sunday)->name }}</td>
                                    </tr>


                            </tbody>
                        </table>

                        <br>

                        All Punching Deatils :

                        <table class="table table-striped table-responsive">
                            <thead class="thead-dark ">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Puching</th>
                                    <th scope="col">Meal Type</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_punch as $key => $ap)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $ap->punch_time }}</td>
                                        <td>{{ $ap->meal_type == 1 ? "BreakFast" : "Meal" }}</td>


                                    </tr>
                                @endforeach

                            </tbody>
                        </table>







                        Transaction Details :
                        <table class="table table-striped table-responsive">
                            <thead class="thead-dark ">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Plan</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Order Id</th>
                                    <th scope="col">Transaction Id</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($topups as $key => $tp)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $tp->name }}</td>
                                        <td>{{ $tp->amount }}</td>
                                        <td>{{ $tp->order_id }}</td>
                                        <td>{{ $tp->rzp_paymentid }}</td>
                                        <td>{{ \Carbon\Carbon::parse($tp->created_at)->format('d-m-Y') }}</td>
                                        <td>{{ $tp->payment_status }}</td>

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