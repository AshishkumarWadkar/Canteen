@extends('layouts.admin.app')

@section('admin-content')
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
                                <input type="text" class="form-control" id="phone" placeholder="10 Digits" name="phone"   maxlength="10" required>
                            </div>
                            <div class="form-group my-2">
                                <label for="phone">Password : </label>
                                <input type="text" class="form-control" id="password" placeholder="Password" name="password"    required>
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

@endsection
