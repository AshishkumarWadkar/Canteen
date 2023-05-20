@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Student') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form class="needs-validation" method="POST" action="{{ route('student.store') }}">
                            @csrf
                            <div class="form-group my-2  form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="existing" name="existing" onchange="showbarcode()">
                                <label class="form-check-label" for="existing">
                                    Existing Student
                                </label>
                            </div>

                            <div class="form-group my-2 barcode ">
                                <label for="barcode">Barcode : </label>
                                <input type="number" class="form-control" id="barcode" name="barcode" value="" placeholder="Please Scan the Card"
                                     required >
                            </div>
                            <div class="form-group my-2">
                                <label for="name">Student's Full-Name : </label>
                                <input type="name" class="form-control" id="name" placeholder="First Name Middle Name Last Name" name="name" required>
                            </div>
                            <div class="form-group my-2">
                                <label for="class">Class: </label>
                                <select class="form-control" id="class" name="class" required>
                                    <option>Select Class</option>
                                    @foreach ($class as $c)
                                    <option value={{ $c->id }}>{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group my-2">
                                <label for="division">Division: </label>
                                <select class="form-control" id="division" name="division" required>
                                    <option>Select Division</option>
                                    @foreach ($division as $d)
                                        <option value={{ $d->id }}>{{ $d->name }}</option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group my-2">
                                <label for="phone">Phone : </label>
                                <input type="text" class="form-control" id="phone" placeholder="10 Digits" name="phone"   maxlength="10">
                            </div>


                            <div class="form-group my-2 ">
                                <button type="submit" class="btn btn-block btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

document.querySelector('#barcode').value = {{ $generated_barcode }};
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


        function showbarcode() {
            document.querySelector('#barcode').value = null;
            barcode = document.querySelector('.barcode');

            // if (barcode.classList.contains('d-none'))
            // {
            //     barcode.classList.remove('d-none');

            // } else
            // {
            //     barcode.classList.add('d-none');
            // }
        }
    </script>
@endsection
