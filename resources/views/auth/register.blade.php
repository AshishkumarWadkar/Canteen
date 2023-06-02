@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $title ?? '' }} {{ __('Register') }}</div>

                    <div class="card-body">
                        @isset($route)
                            <form method="POST" action="{{ $route }}">
                            @else
                                <form method="POST" action="{{ route('register') }}">
                                @endisset
                                @csrf

                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="text"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="role"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Canteen') }}</label>
                                    @php
                                        $canteen = \App\Models\Mess::get(['id', 'name']);
                                    @endphp
                                    <div class="col-md-6">
                                        <select class="form-control" id="created_by" name="created_by" required>
                                            <option selected value="0">Select Canteen</option>
                                            @foreach ($canteen as $k => $c)
                                                <option selected value={{ $c->id }}>{{ $c->name }}</option>
                                            @endforeach
                                        </select>

                                        @error('role')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="role"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" id="role" name="role" required>
                                            <option selected value="1">Student</option>
                                            <option value="2">Teacher</option>

                                        </select>

                                        @error('role')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-7 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                                style="background-image: url('../assets/img/illustrations/login.jpg'); background-size: cover;">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-5 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h4 class="font-weight-bolder">Registration Form</h4>
                                    <p class="mb-0">Please Fill up the form to Register</p>
                                </div>

                                @isset($route)
                                    <form method="POST" action="{{ $route }}" onsubmit="return validateForm();">
                                    @else
                                        <form method="POST" action="{{ route('register') }}">
                                        @endisset
                                        @csrf

                                        @if (count($errors) > 0)
                                            @foreach ($errors->all() as $error)
                                                @php
                                                    toastr()->addError($error);
                                                @endphp
                                            @endforeach
                                        @endif
                                        <div class="input-group input-group-outline mb-3">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus
                                                placeholder="Name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <input id="email" type="number"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email"
                                                placeholder="Phone">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="input-group input-group-outline mb-3 d-flex ">
                                            <label for="created_by"
                                                class="col-6 col-form-label ">{{ __('Select Canteen') }}</label>
                                            @php
                                                $canteen = \App\Models\Mess::get(['id', 'name']);
                                            @endphp
                                            <div class="col-md-5">
                                                <select class="form-control" id="created_by" name="created_by" required>
                                                    <option selected value="0">Select Canteen</option>
                                                    @foreach ($canteen as $k => $c)
                                                        <option selected value={{ $c->id }}>{{ $c->name }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            @error('created_by')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="input-group input-group-outline mb-3 d-flex ">
                                            <label for="role"
                                                class="col-6 col-form-label ">{{ __('Select Role') }}</label>

                                            <div class="col-md-5">
                                                <select class="form-control" id="role" name="role" required>
                                                    <option selected value="0">Select Role</option>
                                                    <option value="1">Student</option>
                                                    <option value="2">Teacher</option>
                                                </select>

                                                @error('role')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="input-group input-group-outline mb-3 d-flex ">
                                            <label for="role" class="col-6 col-form-label ">{{ __('Class') }}</label>
                                            @php
                                                $class = \DB::table('class')->get(['id', 'name']);
                                            @endphp
                                            <div class="col-md-5">
                                                <select class="form-control" id="class_id" name="class_id" required>
                                                    <option selected value="0">Select class</option>
                                                    @foreach ($class as $k => $c)
                                                        <option value={{ $c->id }}>{{ $c->name }}</option>
                                                    @endforeach
                                                </select>

                                                @error('role')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="input-group input-group-outline mb-3 d-flex ">
                                            <label for="role"
                                                class="col-6 col-form-label ">{{ __('Division') }}</label>
                                            @php
                                                $division = \DB::table('division')->get(['id', 'name']);
                                            @endphp
                                            <div class="col-md-5">
                                                <select class="form-control" id="division_id" name="division_id" required>
                                                    <option selected value="0">Select division</option>
                                                    @foreach ($division as $k => $c)
                                                        <option value={{ $c->id }}>{{ $c->name }}</option>
                                                    @endforeach
                                                </select>

                                                @error('role')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="input-group input-group-outline mb-3">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="new-password" placeholder="Password">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password"
                                                placeholder="Confirm Password">
                                        </div>
                                        <div class="form-check form-check-info text-start ps-0">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" onclick="myFunction()">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I agree the <a href="javascript:;"
                                                    class="text-dark font-weight-bolder">Terms and Conditions</a>
                                            </label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" id="submit"
                                                class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" disabled>SignUp</button>
                                        </div>
                                    </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-2 text-sm mx-auto">
                                    Already have an account?
                                    <a href="{{ route('login') }}"
                                        class="text-primary text-gradient font-weight-bold">Sign
                                        in</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>

    <script>
        function myFunction() {
            var checkBox = document.getElementById("flexCheckDefault");
            if (checkBox.checked == true) {
                document.getElementById("submit").disabled = false;
            } else {
                document.getElementById("submit").disabled = true;            }
        }
    </script>
@endsection
