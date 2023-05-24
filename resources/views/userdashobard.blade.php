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

                        <br>

                        @if($students->is_subscribed)
                        <a href="/payment" class="btn btn-block btn-primary">Top Up</a>
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
                                    <th scope="col">BreakFast</th>
                                    <th scope="col">Meal</th>

                                </tr>
                            </thead>
                            <tbody>

                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Monday</td>
                                        <td>{{$week_menus->b_monday > 0 ?  \App\Models\MenuMaster::findOrFail($week_menus->b_monday)->name : "-----" }}</td>
                                        <td>{{$week_menus->monday > 0 ?  \App\Models\MenuMaster::findOrFail($week_menus->monday)->name : "-----" }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Tuesday</td>
                                        <td>{{$week_menus->b_tuesday > 0 ?  \App\Models\MenuMaster::findOrFail($week_menus->b_tuesday)->name : "-----" }}</td>
                                        <td>{{$week_menus->tuesday > 0 ?  \App\Models\MenuMaster::findOrFail($week_menus->tuesday)->name : "-----" }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Wednesday</td>
                                        <td>{{$week_menus->b_wednesday > 0 ?  \App\Models\MenuMaster::findOrFail($week_menus->b_wednesday)->name : "-----" }}</td>
                                        <td>{{$week_menus->wednesday > 0 ?  \App\Models\MenuMaster::findOrFail($week_menus->wednesday)->name : "-----" }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Thursday</td>
                                        <td>{{$week_menus->b_thursday > 0 ?  \App\Models\MenuMaster::findOrFail($week_menus->b_thursday)->name : "-----" }}</td>
                                        <td>{{$week_menus->thursday > 0 ?  \App\Models\MenuMaster::findOrFail($week_menus->thursday)->name : "-----" }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Friday</td>
                                        <td>{{$week_menus->b_friday > 0 ?  \App\Models\MenuMaster::findOrFail($week_menus->b_friday)->name : "-----" }}</td>
                                        <td>{{$week_menus->friday > 0 ?  \App\Models\MenuMaster::findOrFail($week_menus->friday)->name : "-----" }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Saturday</td>
                                        <td>{{$week_menus->b_saturday > 0 ?  \App\Models\MenuMaster::findOrFail($week_menus->b_saturday)->name : "-----" }}</td>
                                        <td>{{$week_menus->saturday > 0 ?  \App\Models\MenuMaster::findOrFail($week_menus->saturday)->name : "-----" }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Sunday</td>
                                        <td>{{$week_menus->b_sunday > 0 ?  \App\Models\MenuMaster::findOrFail($week_menus->b_sunday)->name : "-----" }}</td>
                                        <td>{{$week_menus->sunday > 0 ?  \App\Models\MenuMaster::findOrFail($week_menus->sunday)->name : "-----" }}</td>
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
                    @else

                        <h1>Suscribe to Get Premium Features </h1>
                        <form action="/payment-initiate-request"  method="POST" >
                            @csrf
                            <input type="hidden" name="plan" value="1">
                            <button type="submit" class="btn btn-primary btn-block d-block m-2">Buy Subscription</button>
                        </form>
                    @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
