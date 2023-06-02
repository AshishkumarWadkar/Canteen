@extends('layouts.mess.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">All Consumed Meals </h6>
                        </div>
                    </div>
                    <div class="text-end mx-3 my-2 row align-item-center">
                        <div class="col-6">
                        </div>
                        <div class="col-6">
                            <form action="{{ route('attendance_all') }}">
                            <label class="text-uppercase text-secondary font-weight-bolder" for="from" aria-autocomplete="false">From</label>
                            <input type="date" class="" id="from" name="from" required value="{{ isset($fromdate) ? $fromdate : "" }}">
                            <label class="text-uppercase text-secondary font-weight-bolder" for="to">To</label>
                            <input type="date" class="" id="to" name="to" required value="{{ isset($todate) ? $todate : "" }}">
                            <a href=""><button class="btn btn-sm btn-success mt-2" type="submit">Filter</button></a>
                            <a href=""><button class="btn btn-sm btn-info mt-2">Back</button></a>
                        </form>
                        </div>
                    </div>
                    <div class="card-body pb-2">
                        <div class="table-responsive">
                            <table class="table text-center mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            #</th>
                                        <th
                                            class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Name</th>
                                        <th
                                            class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Time</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Points</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Meal</th>


                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($all as $key => $tp)
                                        <tr>
                                            <td>
                                                <p class="text-start text-xs font-weight-bold mb-0">{{ $key + 1 }}
                                                </p>
                                            </td>
                                            <td>
                                                <p class="text-start text-xs font-weight-bold mb-0">{{ $tp->name }}
                                                </p>
                                            </td>
                                            <td>
                                                <p class="text-start text-xs font-weight-bold mb-0">
                                                    {{ \Carbon\Carbon::parse($tp->punch_time)->format('d-m-Y h:m A') }}
                                                </p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $tp->deduction_point }}
                                                </p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
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

    <script src="../../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
@endsection
