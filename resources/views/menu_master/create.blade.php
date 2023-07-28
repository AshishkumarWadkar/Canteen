@extends('layouts.mess.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Add New Menu ') }}</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form class="needs-validation" method="POST" action="{{ route('menu_master.store') }}">
                                @csrf
                                <div class="input-group input-group-outline mb-3 d-flex">
                                    <label for="name" class="form-label col-5">Item Name : </label>
                                    <input type="name" class="form-control" id="name"
                                         name="name" required>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="col-5" for="class">Meal Period: </label>
                                            <select class="form-control" id="type" name="type" required>
                                                <option value="" selected>Select</option>
                                                <option value="0">Breakfast</option>
                                                <option value="1">Lunch</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="veg_nonveg" value="0">
                                </div>
                                <label for="description" class="form-label">Description: </label>
                                <div class="input-group input-group-outline mb-3 d-flex">
                                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
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
    </div>
@endsection
