@extends('layouts.mess.app')

@section('content')
<div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Add Weekly  Menus ') }}</h6>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form class="needs-validation" method="POST" action="{{ route('weekly_menu.store') }}">
                            @csrf


                            <div class="input-group input-group-outline mb-3 d-flex">
                                <label class="col-5" for="class">Select Monday Menu </label>
                                <input class="form-control" type="week" name="week" id="week"
                                   >
                            </div>

                            <div class="input-group input-group-outline mb-3 d-flex">
                                <label class="col-5" for="class">Meal Type </label>
                                <select class="form-control mx-1 text-center" disabled>

                                        <option>Break Fast</option>



                                </select>
                                <select class="form-control mx-1 text-center" disabled>

                                    <option>Lunch</option>



                                 </select>
                            </div>
                            <div class="input-group input-group-outline mb-3 d-flex">
                                <label class="col-5" for="class">Select Monday Menu </label>
                                <select class="form-control mx-1" id="monday" name="b_monday" required>
                                    <option>Select menu</option>
                                    @foreach ($b_menu as $key => $m)
                                        <option value="{{ $m->id }}"
                                            >
                                            {{ $m->name }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control mx-1" id="monday" name="monday" required>
                                    <option>Select menu</option>
                                    @foreach ($menu as $key => $m)
                                        <option value="{{ $m->id }}"
                                           >{{ $m->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group input-group-outline mb-3 d-flex">
                                <label class="col-5" for="class">Select Tuesday Menu </label>
                                <select class="form-control mx-1" id="tuesday" name="b_tuesday" required>
                                    <option>Select menu</option>
                                    @foreach ($b_menu as $key => $m)
                                        <option value="{{ $m->id }}">
                                            {{ $m->name }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control mx-1" id="tuesday" name="tuesday" required>
                                    <option>Select menu</option>
                                    @foreach ($menu as $key => $m)
                                        <option value="{{ $m->id }}">
                                            {{ $m->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group input-group-outline mb-3 d-flex">
                                <label class="col-5" for="class">Select Wednesday Menu </label>
                                <select class="form-control mx-1" id="wednesday" name="b_wednesday" required>
                                    <option>Select menu</option>
                                    @foreach ($b_menu as $key => $m)
                                        <option value="{{ $m->id }}">
                                            {{ $m->name }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control mx-1" id="wednesday" name="wednesday" required>
                                    <option>Select menu</option>
                                    @foreach ($menu as $key => $m)
                                        <option value="{{ $m->id }}">
                                            {{ $m->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group input-group-outline mb-3 d-flex">
                                <label class="col-5" for="class">Select Thursday Menu </label>
                                <select class="form-control mx-1" id="thursday" name="b_thursday" required>
                                    <option>Select menu</option>
                                    @foreach ($b_menu as $key => $m)
                                        <option value="{{ $m->id }}">
                                            {{ $m->name }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control mx-1" id="thursday" name="thursday" required>
                                    <option>Select menu</option>
                                    @foreach ($menu as $key => $m)
                                        <option value="{{ $m->id }}">
                                            {{ $m->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group input-group-outline mb-3 d-flex">
                                <label class="col-5" for="class">Select Friday Menu </label>
                                <select class="form-control mx-1" id="friday" name="b_friday" required>
                                    <option>Select menu</option>
                                    @foreach ($b_menu as $key => $m)
                                        <option value="{{ $m->id }}">
                                            {{ $m->name }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control mx-1" id="friday" name="friday" required>
                                    <option>Select menu</option>
                                    @foreach ($menu as $key => $m)
                                        <option value="{{ $m->id }}">
                                            {{ $m->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group input-group-outline mb-3 d-flex">
                                <label class="col-5" for="class">Select Saturday Menu </label>
                                <select class="form-control mx-1" id="saturday" name="b_saturday" required>
                                    <option>Select menu</option>
                                    @foreach ($b_menu as $key => $m)
                                        <option value="{{ $m->id }}">
                                            {{ $m->name }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control mx-1" id="saturday" name="saturday" required>
                                    <option>Select menu</option>
                                    @foreach ($menu as $key => $m)
                                        <option value="{{ $m->id }}">
                                            {{ $m->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group input-group-outline mb-3 d-flex">
                                <label class="col-5" for="class">Select Sunday Menu </label>
                                <select class="form-control mx-1" id="sunday" name="b_sunday" required>
                                    <option>Select menu</option>
                                    @foreach ($b_menu as $key => $m)
                                        <option value="{{ $m->id }}">
                                            {{ $m->name }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control mx-1" id="sunday" name="sunday" required>
                                    <option>Select menu</option>
                                    @foreach ($menu as $key => $m)
                                        <option value="{{ $m->id }}">
                                            {{ $m->name }}</option>
                                    @endforeach
                                </select>
                            </div>




                            <div class="form-group my-2 text-end">
                                <button type="submit" class="btn btn-block btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
