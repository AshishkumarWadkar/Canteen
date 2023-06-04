@extends('layouts.user.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">


                        <div class="row col-12">
                            <label class="col-5 fw-bold"> Name of User :</label>
                            <label class="col-5">{{ $students->name }}
                        </div>
                        <div class="row col-12">
                            <label class="col-5 fw-bold">Phone :</label>
                                <label class="col-5">{{ $students->email }}</label>
                        </div>
                        <div class="row col-12">
                            <label class="col-5 fw-bold">Account Balance :</label>
                                <label class="col-5">{{ $students->points }}</label>
                        </div>
                        <div class="row col-12">
                            <label class="col-5 fw-bold">Barcode Number :</label>
                                <label class="col-5">{{ $students->barcode }}</label>
                        </div>
                        <div class="col-sm-12">

                            <div class="row col-12">
                                {!! DNS1D::getBarcodeHTML($students->barcode, 'PHARMA') !!}
                            </div>
                        </div>


                        @if ($students->is_subscribed)
                            <div class="text-center">
                                <a href="/plan" class="btn btn-success mx-auto my-2">Recharge your Account Here</a>

                            </div>


                            <div class="container-fluid py-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card my-4">
                                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-1 pb-1">
                                                    <h6 class="text-white text-capitalize ps-3 text-center">Meals Consumed Today
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="card-body px-0 pb-2">
                                                <div class="table-responsive p-0">
                                                    <table class="table align-items-center mb-0">
                                                        <thead class="thead-dark ">
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Time</th>
                                                                <th scope="col">Meal Type</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($todays_punch as $key => $tp)
                                                                <tr>
                                                                    <th scope="row">{{ $key + 1 }}</th>
                                                                    <td>{{ $tp->punch_time }}</td>
                                                                    <td class="text-center">
                                                                        <span class="badge badge-sm bg-gradient-{{ $tp->meal_type == 1 ? 'success' : 'primary' }}">{{ $tp->meal_type == 1 ? 'BreakFast' : 'Lunch' }}</span>
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


                            <div class="container-fluid py-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card my-4">
                                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-1 pb-1">
                                                    <h6 class="text-white text-capitalize ps-3 text-center">Weekly Menus
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="card-body px-0 pb-2">
                                                <div class="table-responsive p-0">
                                                    <table class="table align-items-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    #</th>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Day</th>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                    BreakFast</th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Meal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Monday</td>
                                                                <td>{{ isset($week_menus->b_monday) && $week_menus->b_monday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->b_monday)->name : '-----' }}
                                                                </td>
                                                                <td>{{ isset($week_menus->monday) && $week_menus->monday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->monday)->name : '-----' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Tuesday</td>
                                                                <td>{{ isset($week_menus->b_tuesday) && $week_menus->b_tuesday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->b_tuesday)->name : '-----' }}
                                                                </td>
                                                                <td>{{ isset($week_menus->tuesday) && $week_menus->tuesday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->tuesday)->name : '-----' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>Wednesday</td>
                                                                <td>{{ isset($week_menus->b_wednesday) && $week_menus->b_wednesday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->b_wednesday)->name : '-----' }}
                                                                </td>
                                                                <td>{{ isset($week_menus->wednesday) && $week_menus->wednesday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->wednesday)->name : '-----' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">4</th>
                                                                <td>Thursday</td>
                                                                <td>{{ isset($week_menus->b_thursday) && $week_menus->b_thursday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->b_thursday)->name : '-----' }}
                                                                </td>
                                                                <td>{{ isset($week_menus->thursday) && $week_menus->thursday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->thursday)->name : '-----' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">5</th>
                                                                <td>Friday</td>
                                                                <td>{{ isset($week_menus->b_friday) && $week_menus->b_friday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->b_friday)->name : '-----' }}
                                                                </td>
                                                                <td>{{ isset($week_menus->friday) && $week_menus->friday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->friday)->name : '-----' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">6</th>
                                                                <td>Saturday</td>
                                                                <td>{{ isset($week_menus->b_saturday) && $week_menus->b_saturday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->b_saturday)->name : '-----' }}
                                                                </td>
                                                                <td>{{ isset($week_menus->saturday) && $week_menus->saturday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->saturday)->name : '-----' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">7</th>
                                                                <td>Sunday</td>
                                                                <td>{{ isset($week_menus->b_sunday) && $week_menus->b_sunday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->b_sunday)->name : '-----' }}
                                                                </td>
                                                                <td>{{ isset($week_menus->sunday) && $week_menus->sunday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->sunday)->name : '-----' }}
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="container-fluid py-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card my-4">
                                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-1 pb-1">
                                                    <h6 class="text-white text-capitalize ps-3 text-center">Meals Consumed History</h6>
                                                </div>
                                            </div>
                                            <div class="card-body px-0 pb-2">
                                                <div class="table-responsive p-0">
                                                    <table id="student" class="table align-items-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    #</th>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                    Puching</th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Meal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($all_punch as $key => $ap)
                                                                <tr>
                                                                    <th scope="row">{{ $key + 1 }}</th>
                                                                    <td>
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            {{ $ap->punch_time }}</p>
                                                                    </td>
                                                                    <td class="align-middle text-center text-sm">
                                                                        <span
                                                                        class="badge badge-sm bg-gradient-{{ $ap->meal_type == 1 ? 'success' : 'primary' }}">{{ $ap->meal_type == 1 ? 'BreakFast' : 'Lunch' }}</span>
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



                            <div class="container-fluid py-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card my-4">
                                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-1 pb-1">
                                                    <h6 class="text-white text-capitalize ps-3 text-center">Recharge History</h6>
                                                </div>
                                            </div>
                                            <div class="card-body px-0 pb-2">
                                                <div class="table-responsive p-0">
                                                    <table class="table align-items-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    #</th>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                    Plan</th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Amount</th>

                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Transaction Id</th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Date</th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($topups as $key => $tp)
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex px-2 py-1">
                                                                            <p class="text-xs text-secondary mb-0">
                                                                                {{ $key + 1 }}</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            {{ $tp->name }}</p>
                                                                    </td>
                                                                    <td class="align-middle text-center text-sm">
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            {{ $tp->amount }}</p>
                                                                    </td>

                                                                    <td class="align-middle">
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            {{ $tp->transactionId }}
                                                                        </p>

                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            {{ \Carbon\Carbon::parse($tp->created_at)->format('d-m-Y') }}

                                                                        </p>

                                                                    <td class="align-middle text-center text-sm">
                                                                        <span
                                                                            class="badge badge-sm {{ $tp->code == "PAYMENT_SUCCESS" ? "bg-gradient-success" : "bg-gradient-danger"}} {{ $tp->code == "PAYMENT_INITIATED" ? "bg-gradient-secondary" : ""}}">{{ str_replace("_"," ",$tp->code) }}</span>
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
                        @else
                            <form action="/payment" method="POST" class="text-center">
                                @csrf
                                <label for="">Please Pay Annual Registration Fees</label>
                                <input type="hidden" name="plan" value="1">
                                <button type="submit" class="btn btn-primary btn-block d-block m-2 mx-auto">Pay Now</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $('#student').DataTable();
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js">
        <script src = "https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" >
            <script src = "https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js" >
            <script src = "https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js" >
            <script src = "https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js" >
            <script src = "https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" >
            <script src = "https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" >
            <script src = "https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" >
            <script src = "https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js" >
            <script src = "https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js" >
            <script src = "https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js" >
            <script src = "../../../assets/js/core/bootstrap.min.js" >
    </script>
    <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
@endsection
