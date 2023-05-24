@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Attendance') }}</div>

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

                            <div class="form-group my-2 barcode ">
                                <label for="barcode">Barcode : </label>
                                <input type="number" class="form-control" id="barcode" name="barcode" value=""
                                    placeholder="Please Scan the Card" required>
                            </div>
                            <div class="form-group my-2 barcode ">
                                <label for="barcode">Meal Type : </label>
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
                            <div class="form-group my-2">
                                <label for="name">User Name : </label>
                                <input type="name" class="form-control" id="name"
                                    placeholder="First Name Middle Name Last Name" name="name"
                                    value="{{ isset($student) && isset($student->name) ? $student->name : '' }}">
                            </div>

                            <div class="form-group my-2">
                                <label for="phone">Phone : </label>
                                <input type="text" class="form-control" id="phone" placeholder="10 Digits"
                                    name="phone"
                                    value="{{ isset($student) && isset($student->email) ? $student->email : '' }}"
                                    maxlength="10">
                            </div>
                            <div class="form-group my-2">
                                <label for="phone">Current Balance : </label>
                                <input type="text" class="form-control" id="balance" placeholder="10 Digits"
                                    name="balance" value="{{ isset($balance) ? $balance : 0 }}" maxlength="10">
                            </div>


                            <div class="form-group my-2 ">
                                <a href="{{ url()->previous() }}"><button type="button" class="btn btn-block btn-secondary">Back</button></a>
                                <button type="submit" class="btn btn-block btn-success">Punch</button>
                            </div>
                        </form>

                        <table class="table table-striped table-responsive">
                            <thead class="thead-dark ">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Meal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($todays_punch)

                                @foreach ($todays_punch as $key => $tp)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $tp->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($tp->punch_time)->format('d-m-Y h:m A') }}</td>
                                    <td>{{ $tp->meal_type == 1 ? 'BreakFast' : 'Lunch' }}</td>
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
