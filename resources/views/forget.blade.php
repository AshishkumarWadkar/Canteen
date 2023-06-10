@extends('layouts.app')

@section('content')
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100"
            style="background-image:  url('../assets/img/illustrations/log.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Enter Phone Number :
                                    </h4>

                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('verifyotp') }}" role="form" class="text-start">
                                    @csrf
                                    <div class="input-group input-group-outline my-3">
                                        <input type="text" name="email" class="form-control" id="email" placeholder="Phone">
                                        <span type="" role="a" class="btn bg-gradient-primary w-100 my-4 mb-2"
                                    id="getOtp">Get OTP</span>
                                    </div>

                                    {{-- <div class="input-group input-group-outline mb-3">
                                        <input id="otp" name="otp" type="number" class="form-control"
                                            placeholder="otp">
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign
                                            in</button>
                                    </div> --}}

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {



            $("#getOtp").click(function() {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('sendotp') }}",
                    type: 'POST',
                    data: { phone:$("#email").val()},

                    success: function(response) {
                        alert("otp sent to registered number");
                        window.location.href ="/login"
                                           },
                    error: function(response) {}
                });
            });

        });
    </script>
@endsection
