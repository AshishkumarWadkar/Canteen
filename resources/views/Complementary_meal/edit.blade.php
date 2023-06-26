@extends('layouts.mess.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Edit Complementary Meal') }}</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form class="needs-validation" method="POST" action="{{ route('complementary_meal.update', $cms->id) }}">
                                @method('PUT')
                                @csrf
                                <div class="row">

                                    <div class="col-6">
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="col-4" for="event_name">Event Name : </label>
                                            <input type="text" class="form-control" id="event_name"
                                                placeholder="Event Name" value="{{$cms->event_name}}" name="event_name" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="col-2" for="amount">Date : </label>
                                            <input type="date" class="form-control" id="date" placeholder="Enter Dates"
                                                value="{{$cms->date}}" name="date">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="col-2 " for="meal_description">Meal Description : </label>
                                            <textarea rows="5" class="form-control" id="meal_description" placeholder="description"
                                                name="meal_description" required>{{$cms->meal_description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group input-group-outline mb-3 d-flex justify-content-between">
                                            <a href="{{ route('mess_dashboard') }}"><button type="button"
                                                    class="btn btn-block btn-primary">Back</button></a>
                                            <a><button type="submit" class="btn btn-block btn-warning">Save</button></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
