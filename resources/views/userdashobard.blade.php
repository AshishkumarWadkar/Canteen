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
                                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 collapseable">
                                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-1 pb-1">
                                                    <h6 class="text-white text-capitalize ps-3 text-center">Mark Your Leaves </h6>
                                                </div>
                                            </div>
                                            <div class="card-body px-0 pb-2 collapse">
                                                <div class="table-responsive p-0">
                                                <div class="row">
                                                    <form action="{{ route("leave.index") }}" method="POST">
                                                        @csrf
                                                    <div class="col-3">
                                                        <input type="date" name="date" id="date" class="date form-control" required min="{{ Carbon\Carbon::now()->addDays(1)->format("Y-m-d") }}">
                                                    </div>
                                                    <div class="col-6">
                                                        <button type="submit" class="btn btn-sm btn-success">Mark</button>
                                                    </div>
                                                    </form>

                                                </div>
                                                    <table class="table align-items-center mb-0">
                                                        <thead class="thead-dark ">
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Attendance Date</th>
                                                                <th scope="col">Created at</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($leave as $key => $lv)
                                                                <tr>
                                                                    <th scope="row">{{ $key + 1 }}</th>
                                                                    <td>{{ $lv->leave_date }}</td>
                                                                    <td>{{ $lv->created_at }}</td>
                                                                    <td>@if(Carbon\Carbon::now()->lt($lv->leave_date)) <a class="btn btn-sm btn-warning" href="{{ route('leave.edit',$lv->id) }}">Delete</a>@endif</td>



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
                                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 collapseable">
                                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-1 pb-1">
                                                    <h6 class="text-white text-capitalize ps-3 text-center">Meals Consumed
                                                        Today
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="card-body px-0 pb-2 collapse">
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
                                                                        <span
                                                                            class="badge badge-sm bg-gradient-{{ $tp->meal_type == 1 ? 'success' : 'primary' }}">{{ $tp->meal_type == 1 ? 'BreakFast' : 'Lunch' }}</span>
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
                                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 collapseable">
                                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-1 pb-1">
                                                    <h6 class="text-white text-capitalize ps-3 text-center">Weekly Menus
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="card-body px-0 pb-2 collapse">
                                                <div class="table-responsive p-0">
                                                    <table class="table align-items-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-lg-block d-none">#</th>
                                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Day</th>
                                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 "> BreakFast</th>
                                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Meal</th>
                                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Booking</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row" class="d-lg-block d-none">1</th>
                                                                <td>Monday</td>
                                                                <td>{{ isset($week_menus->b_monday) && $week_menus->b_monday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->b_monday)->name : '-----' }}
                                                                </td>
                                                                <td>{{ isset($week_menus->monday) && $week_menus->monday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->monday)->name : '-----' }}
                                                                </td>
                                                                <td>
                                                                    @if(isset($week_menus->b_monday) && $week_menus->b_monday > 0)<button class="btn btn-sm btn-success btn booking_modal"  data-day="1" data-menu="{{ $week_menus->b_monday }}">Book Breakfast</button>@endif
                                                                    @if(isset($week_menus->monday) && $week_menus->monday > 0)<button class="btn btn-sm btn-primary btn booking_modal"  data-day="1" data-menu="{{ $week_menus->monday }}">Lunch Book</button>@endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="d-lg-block d-none" scope="row">2</th>
                                                                <td>Tuesday</td>
                                                                <td>{{ isset($week_menus->b_tuesday) && $week_menus->b_tuesday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->b_tuesday)->name : '-----' }}
                                                                </td>
                                                                <td>{{ isset($week_menus->tuesday) && $week_menus->tuesday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->tuesday)->name : '-----' }}
                                                                </td>
                                                                <td>
                                                                    @if(isset($week_menus->b_tuesday) && $week_menus->b_tuesday > 0)<button class="btn btn-sm btn-success btn booking_modal"  data-day="2" data-menu="{{ $week_menus->b_tuesday }}">Book Breakfast</button>@endif
                                                                    @if(isset($week_menus->tuesday) && $week_menus->tuesday > 0)<button class="btn btn-sm btn-primary btn booking_modal"  data-day="2" data-menu="{{ $week_menus->tuesday }}">Lunch Book</button>@endif
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <th class="d-lg-block d-none" scope="row">3</th>
                                                                <td>Wednesday</td>
                                                                <td>{{ isset($week_menus->b_wednesday) && $week_menus->b_wednesday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->b_wednesday)->name : '-----' }}
                                                                </td>
                                                                <td>{{ isset($week_menus->wednesday) && $week_menus->wednesday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->wednesday)->name : '-----' }}
                                                                </td>
                                                                <td>
                                                                    @if(isset($week_menus->b_wednesday) && $week_menus->b_wednesday > 0)<button class="btn btn-sm btn-success btn booking_modal"  data-day="3" data-menu="{{ $week_menus->b_wednesday }}">Book Breakfast</button>@endif
                                                                    @if(isset($week_menus->wednesday) && $week_menus->wednesday > 0)<button class="btn btn-sm btn-primary btn booking_modal"  data-day="3" data-menu="{{ $week_menus->wednesday }}">Lunch Book</button>@endif
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <th class="d-lg-block d-none" scope="row">4</th>
                                                                <td>Thursday</td>
                                                                <td>{{ isset($week_menus->b_thursday) && $week_menus->b_thursday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->b_thursday)->name : '-----' }}
                                                                </td>
                                                                <td>{{ isset($week_menus->thursday) && $week_menus->thursday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->thursday)->name : '-----' }}
                                                                </td>
                                                                <td>
                                                                    @if(isset($week_menus->b_thursday) && $week_menus->b_thursday > 0)<button class="btn btn-sm btn-success btn booking_modal"  data-day="4" data-menu="{{ $week_menus->b_thursday }}">Book Breakfast</button>@endif
                                                                    @if(isset($week_menus->thursday) && $week_menus->thursday > 0)<button class="btn btn-sm btn-primary btn booking_modal"  data-day="4" data-menu="{{ $week_menus->thursday }}">Lunch Book</button>@endif
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <th class="d-lg-block d-none" scope="row">5</th>
                                                                <td>Friday</td>
                                                                <td>{{ isset($week_menus->b_friday) && $week_menus->b_friday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->b_friday)->name : '-----' }}
                                                                </td>
                                                                <td>{{ isset($week_menus->friday) && $week_menus->friday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->friday)->name : '-----' }}
                                                                </td>
                                                                <td>
                                                                    @if(isset($week_menus->b_friday) && $week_menus->b_friday > 0)<button class="btn btn-sm btn-success btn booking_modal"  data-day="5" data-menu="{{ $week_menus->b_friday }}">Book Breakfast</button>@endif
                                                                    @if(isset($week_menus->friday) && $week_menus->friday > 0)<button class="btn btn-sm btn-primary btn booking_modal"  data-day="5" data-menu="{{ $week_menus->friday }}">Lunch Book</button>@endif
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <th class="d-lg-block d-none" scope="row">6</th>
                                                                <td>Saturday</td>
                                                                <td>{{ isset($week_menus->b_saturday) && $week_menus->b_saturday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->b_saturday)->name : '-----' }}
                                                                </td>
                                                                <td>{{ isset($week_menus->saturday) && $week_menus->saturday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->saturday)->name : '-----' }}
                                                                </td>
                                                                <td>
                                                                    @if(isset($week_menus->b_saturday) && $week_menus->b_saturday > 0)<button class="btn btn-sm btn-success btn booking_modal"  data-day="6" data-menu="{{ $week_menus->b_saturday }}">Book Breakfast</button>@endif
                                                                    @if( isset($week_menus->saturday) && $week_menus->saturday > 0)<button class="btn btn-sm btn-primary btn booking_modal"  data-day="6" data-menu="{{ $week_menus->saturday }}">Lunch Book</button>@endif
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <th class="d-lg-block d-none" scope="row">7</th>
                                                                <td>Sunday</td>
                                                                <td>{{ isset($week_menus->b_sunday) && $week_menus->b_sunday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->b_sunday)->name : '-----' }}
                                                                </td>
                                                                <td>{{ isset($week_menus->sunday) && $week_menus->sunday > 0 ? \App\Models\MenuMaster::findOrFail($week_menus->sunday)->name : '-----' }}
                                                                </td>
                                                                <td>


                                                                    @if(isset($week_menus->b_sunday) && $week_menus->b_sunday > 0)<button class="btn btn-sm btn-success btn booking_modal"  data-day="7" data-menu="{{ $week_menus->b_sunday }}">Book Breakfast</button>@endif
                                                                    @if(isset($week_menus->sunday) && $week_menus->sunday > 0)<button class="btn btn-sm btn-primary btn booking_modal"  data-day="7" data-menu="{{ $week_menus->sunday }}">Lunch Book</button>@endif
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
                                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 collapseable">
                                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-1 pb-1">
                                                    <h6 class="text-white text-capitalize ps-3 text-center ">Pre-Book History</h6>

                                                </div>
                                            </div>
                                            <div class="card-body px-0 pb-2 collapse collapse">
                                                <div class="table-responsive p-0">
                                                    <table id="student" class="table align-items-center mb-0" id="demo">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> Menu</th>
                                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Booking date</th>
                                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Meal Type</th>
                                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($prebooking as $key => $pb)
                                                                <tr>
                                                                    <th scope="row">{{ $key + 1 }}</th>
                                                                    <td>
                                                                        <p class="text-xs font-weight-bold mb-0">{{ $pb->name }}</p>
                                                                    </td>
                                                                    <td>
                                                                        <p class="text-xs font-weight-bold mb-0">{{ $pb->booking_date }}</p>
                                                                    </td>
                                                                    <td class="align-middle text-center text-sm">
                                                                        <span class="badge badge-sm bg-gradient-{{ $pb->type == 0 ? 'success' : 'primary' }}">{{ $pb->type == 0 ? 'BreakFast' : 'Lunch' }}</span>
                                                                    </td>
                                                                    <td class="align-middle text-center text-sm">
                                                                        <span class="badge badge-sm bg-gradient-{{ $pb->status == 1 ? 'success' : 'primary' }}">{{ $pb->status == 1 ? 'Active' : 'Cancelled' }}</span>
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
                                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 collapseable">
                                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-1 pb-1">
                                                    <h6 class="text-white text-capitalize ps-3 text-center">Meals Consumed History</h6>
                                                </div>
                                            </div>
                                            <div class="card-body px-0 pb-2 collapse">
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
                                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 collapseable">
                                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-1 pb-1">
                                                    <h6 class="text-white text-capitalize ps-3 text-center">Recharge History
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="card-body px-0 pb-2 collapse">
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
                                                                            {{ $tp->merchantTransactionId }}
                                                                        </p>

                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            {{ \Carbon\Carbon::parse($tp->created_at)->format('d-m-Y') }}

                                                                        </p>

                                                                    <td class="align-middle text-center text-sm">
                                                                        <span
                                                                            class="badge badge-sm {{ $tp->code == 'PAYMENT_SUCCESS' ? 'bg-gradient-success' : 'bg-gradient-danger' }} {{ $tp->code == 'PAYMENT_INITIATED' ? 'bg-gradient-secondary' : '' }}">{{ str_replace('_', ' ', $tp->code) }}</span>
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


                            <div class="modal" tabindex="-1" id="booking_modal">
                                <div class="modal-dialog modal-fullscreen-sm-down">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Meal Details</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <h5>Meal Type : </h5><p id="modal_meal_type"></p>
                                        </div>
                                        <div class="row">
                                            <h5>Name : </h5><p id="modal_menu_name"></p>
                                        </div>
                                        <div class="row">
                                            <h5>Description : </h5><p id="modal_menu_desc"></p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary close" >Close</button>
                                        <button type="button" class="btn btn-primary" id="booking_now" >Book Now</button>
                                        <button type="button" class="btn btn-warning" id="cancel_booking_now" >Cancel Booking</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        @else
                            @php
                                $mess_id = \DB::table('users')->find(\Auth::id());
                                $sub_plan = \DB::table('topup_master')->where('created_by',$mess_id->created_by)->where('is_subscription_plan',1)->first();
                            @endphp

                            @if(\DB::table("phonepe")->where('user_id',\Auth::id())->where('code','=','PAYMENT_INITIATED')->where('plan',$sub_plan->id)->exists())

                            <h3 class="mt-3 text-danger">  You have recently Initated payment please wait to Complete the Transaction or Please try again after sometime </h3>
                            @else
                                 @if($mess_id->created_by == 3)
                                    <form action="/payment" method="POST" class="text-center">
                                        @csrf
                                        <strong>Please pay annual registration fee to activate your account</strong><br>
                                        <strong>Digital Card Fee - ONE time charge of INR 50 </strong><br>
                                        <strong>Annual registration fees - INR 300 </strong><br>
                                        <strong>Total 350 Rupees </strong><br>

                                        <input type="hidden" name="plan" value='{{ $sub_plan->id }}'>
                                        <button type="submit" class="btn btn-primary btn-block d-block m-2 mx-auto">Pay Now</button>
                                    </form>
                                @else


                                        <form action="/payment" method="POST" class="text-center">
                                        @csrf
                                        <strong>Please pay annual registration fee to activate your account</strong>
                                        <input type="hidden" name="plan" value='{{ $sub_plan->id }}'>
                                        <button type="submit" class="btn btn-primary btn-block d-block m-2 mx-auto">Pay Now</button>

                                    </form>
                                @endif
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>


    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
    <script src="../../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script> --}}


    <script>
        $(document).ready(function() {

            let day, menu, id;
            // $('#student').DataTable();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(".booking_modal").click(function(){

                day = $(this).data("day");
                menu = $(this).data("menu");
                $.ajax({
                    url: "{{ route('getBookingmenudata') }}",
                    type: 'POST',
                    data: {
                        day: $(this).data("day"),
                        menu: $(this).data("menu"),
                    },

                    success: function(response) {
                        console.log(response);
                        id = response?.exists?.id;
                        $("#modal_meal_type").html(response.data.type == 0 ? "Breakfast" : "Lunch");
                        $("#modal_menu_name").html(response.data.name);
                        $("#modal_menu_desc").html(response.data.description);
                        $("#modal_menu_desc").html(response.data.description);
                        if(response.exists.status == 1)
                        {
                            $("#booking_now").hide();
                            $("#cancel_booking_now").show();
                        }
                        else
                        {
                            $("#booking_now").show();
                            $("#cancel_booking_now").hide();
                        }

                        if({{ Carbon\Carbon::now()->dayOfWeekIso}} > day)
                        {
                            $("#booking_now").hide();
                            $("#cancel_booking_now").hide();
                        }
                        if(response.can_book)
                        {
                            $("#booking_now").hide();
                            $("#cancel_booking_now").hide();
                        }
                        $("#booking_modal").show();
                    },
                    error: function(response) {}
                });
            });

            $(".close").click(function(){
                $("#booking_modal").hide();
            });

            $("#booking_now").click(function() {

               $.ajax({
                    url: "{{ route('booking.store') }}",
                    type: 'POST',
                    data: {
                        day: day,
                        menu: menu,
                        id: id,

                    },

                    success: function(response) {
                        location.reload();
                    },
                    error: function(response) {}
                });
            });
            $("#cancel_booking_now").click(function() {

               $.ajax({
                    url: "{{ route('cancelbooking') }}",
                    type: 'post',
                    data: {
                        id: id,
                    },

                    success: function(response) {
                        location.reload();
                    },
                    error: function(response) {}
                });
            });

            $(".collapseable").click(function(){

               console.log();

                // $(".collapse").collapse('toggle');
                $(this).next().collapse('toggle');
            });
        });
    </script>

@endsection
