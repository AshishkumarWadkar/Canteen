@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Mess') }}</div>

                    <div class="card-body">


                        <form class="needs-validation" method="POST" action="{{ route('mess.store') }}">
                            @csrf

                            <div class="form-group my-2">
                                <label for="name">Name Of The Mess  : </label>
                                <input type="name" class="form-control" id="name" placeholder="Note: No Personal Name" name="name" required>
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

document.querySelector('#barcode').value = {{ $generated_barcode ?? ""}};
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
