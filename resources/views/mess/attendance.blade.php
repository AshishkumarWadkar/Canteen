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
                                <label for="barcode">Meal Type : </label>
                            <div class="form-check form-check-inline mx-4">
                                <input class="form-check-input" type="radio" name="meal_type" id="break_fast" value="1" checked>
                                <label class="form-check-label" for="break_fast">BreakFast</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="meal_type" id="lunch" value="2">
                                <label class="form-check-label" for="lunch">Lunch</label>
                              </div>
                            </div>
                            <div class="form-group my-2 barcode ">
                                <label for="barcode">Barcode : </label>
                                <input type="number" class="form-control" id="barcode" name="barcode" value=""
                                    placeholder="Please Scan the Card" required>
                            </div>
                            <div class="form-group my-2">
                                <label for="name">Student's Full-Name : </label>
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
                                <label for="phone">Balance : </label>
                                <input type="text" class="form-control" id="balance" placeholder="10 Digits"
                                    name="balance"
                                    value="{{ isset($balance)  ? $balance : 0 }}"
                                    maxlength="10">
                            </div>


                            <div class="form-group my-2 ">
                                <button type="submit" class="btn btn-block btn-success">Punch</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
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
    </script>
@endsection
