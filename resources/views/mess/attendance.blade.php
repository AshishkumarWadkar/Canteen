@extends('layouts.mess.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                          <h6 class="text-white text-capitalize ps-3">{{ __('Attendance') }}</h6>
                        </div>
                      </div>

                    <div class="card-body">
                        @if (!empty($success))
                            <div class="alert alert-success">
                                {{ $success }}
                            </div>
                        @endif
                        @if (!empty($error))
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endif


                        <form class="needs-validation" method="POST" action="{{ route('attendance.store') }}">
                            @csrf

                            <div class="text-end mx-3 my-2">
                                <a href="{{ route('attendance_all') }}"><span class="badge badge-sm bg-gradient-info">All Consumed Meals</span></a>
                                </div>
                                <label class="form-label" for="barcode">Barcode : </label>
                            <div class="input-group input-group-outline mb-3 barcode">
                                <input type="number" class="form-control" id="barcode" name="barcode" value=""
                                    placeholder="Please Scan the Card" required min="0">
                            </div>
                            <div class="input-group input-group-outline mb-3 barcode ">
                                <label for="barcode" class="col-3">Meal Type : </label>
                                <div class="form-check form-check-inline mx-4">
                                    <input class="form-check-input" type="radio" name="meal_type" id="break_fast"
                                        value="1">
                                    <label class="form-check-label" for="break_fast">BreakFast</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="meal_type" id="lunch"
                                        value="2">
                                    <label class="form-check-label" for="lunch">Lunch</label>
                                </div>
                            </div>
                            <label for="name" class="form-label">Name</label>
                            <div class="input-group input-group-outline mb-3">
                                <input type="name" class="form-control" id="name"
                                    placeholder="First Name Middle Name Last Name" name="name"
                                    value="{{ isset($student) && isset($student->name) ? $student->name : '' }}" readonly>
                            </div>

                            <label for="phone" class="form-label">Phone</label>
                            <div class="input-group input-group-outline mb-3">
                                <input type="text" class="form-control" id="phone" placeholder="10 Digits"
                                    name="phone"
                                    value="{{ isset($student) && isset($student->email) ? $student->email : '' }}"
                                    maxlength="10" readonly>
                            </div>
                            <label for="phone" class="form-label">Current Balance : </label>
                            <div class="input-group input-group-outline mb-3">
                                <input type="text" class="form-control" id="balance" placeholder="10 Digits"
                                    name="balance" value="{{ isset($balance) ? $balance : 0 }}" maxlength="10" readonly>
                            </div>


                            <div class="input-group input-group-outline mb-3 d-flex justify-content-between">
                                <a href="{{ url()->previous() }}"><button type="button"
                                        class="btn btn-block btn-primary">Back</button></a>&nbsp;&nbsp;
                                <a><button type="submit" class="btn btn-block btn-success">Punch</button></a>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
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
                                                            Name</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Marked at</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Amount Deducted</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Meal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @isset($todays_punch)
                                                        @foreach ($todays_punch as $key => $tp)
                                                            <tr>
                                                                <td>
                                                                    <p class="text-xs font-weight-bold mb-0">{{ $key+1 }}
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <p class="text-xs font-weight-bold mb-0">{{ $tp->name }}
                                                                    </p>
                                                                </td>
                                                                <td class="text-center">
                                                                    <p class="text-xs font-weight-bold mb-0">
                                                                        {{ \Carbon\Carbon::parse($tp->punch_time)->format('d-m-Y h:m A') }}
                                                                    </p>
                                                                </td>
                                                                <td  class="text-center">
                                                                    <p class="text-xs font-weight-bold mb-0">{{ $tp->deduction_point }}
                                                                    </p>
                                                                </td>
                                                                <td class="align-middle text-center text-sm">
                                                                    <span
                                                                        class="badge badge-sm bg-gradient-{{ $tp->meal_type == 1 ? 'success' : 'primary' }}">{{ $tp->meal_type == 1 ? 'BreakFast' : 'Lunch' }}</span>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endisset
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.getElementById("barcode").focus();
        })

        var barcode = '';
        var interval;
        document.addEventListener('keydown', function(evt) {
            if (interval)
                clearInterval(interval);
            if (evt.code == 'Enter') {
                if (barcode)
                    handleBarcode(barcode);
                barcode = '';
                return;
            }
            if (evt.key != 'Shift')
                barcode += evt.key;
            interval = setInterval(() => barcode = '', 1);
        });

        function handleBarcode(scanned_barcode) {
            document.getElementById('barcode').value = scanned_barcode;
        }

        const hour = new Date().getHours();
        if (hour < 12) {

            document.getElementById("break_fast").checked = true;
        } else {
            document.getElementById("lunch").checked = true;
        };
    </script>
@endsection
