@extends('layouts.mess.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Edit Weekly Menu ') }}</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <form class="needs-validation" method="POST"
                                    action="{{ route('weekly_menu.update', $week_menu->id) }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="input-group input-group-outline mb-3 d-flex">
                                        <label class="col-5" for="class">Select Monday Menu </label>
                                        <input class="form-control" type="week" name="week" id="week"
                                        value="{{ $week_menu->week_no }}">
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
                                            @foreach ($b_menu as $key => $m)
                                                <option value="{{ $m->id }}"
                                                    {{ $week_menu->b_monday == $m->id ? 'selected' : '' }}>
                                                    {{ $m->name }}</option>
                                            @endforeach
                                        </select>
                                        <select class="form-control mx-1" id="monday" name="monday" required>
                                            @foreach ($menu as $key => $m)
                                                <option value="{{ $m->id }}"
                                                    {{ $week_menu->monday == $m->id ? 'selected' : '' }}>{{ $m->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group input-group-outline mb-3 d-flex">
                                        <label class="col-5" for="class">Select Tuesday Menu </label>
                                        <select class="form-control mx-1" id="tuesday" name="b_tuesday" required>
                                            @foreach ($b_menu as $key => $m)
                                                <option value="{{ $m->id }}"
                                                    {{ $week_menu->b_tuesday == $m->id ? 'selected' : '' }}>
                                                    {{ $m->name }}</option>
                                            @endforeach
                                        </select>
                                        <select class="form-control mx-1" id="tuesday" name="tuesday" required>
                                            @foreach ($menu as $key => $m)
                                                <option value="{{ $m->id }}"
                                                    {{ $week_menu->tuesday == $m->id ? 'selected' : '' }}>
                                                    {{ $m->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group input-group-outline mb-3 d-flex">
                                        <label class="col-5" for="class">Select Wednesday Menu </label>
                                        <select class="form-control mx-1" id="wednesday" name="b_wednesday" required>
                                            @foreach ($b_menu as $key => $m)
                                                <option value="{{ $m->id }}"
                                                    {{ $week_menu->b_wednesday == $m->id ? 'selected' : '' }}>
                                                    {{ $m->name }}</option>
                                            @endforeach
                                        </select>
                                        <select class="form-control mx-1" id="wednesday" name="wednesday" required>
                                            @foreach ($menu as $key => $m)
                                                <option value="{{ $m->id }}"
                                                    {{ $week_menu->wednesday == $m->id ? 'selected' : '' }}>
                                                    {{ $m->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group input-group-outline mb-3 d-flex">
                                        <label class="col-5" for="class">Select Thursday Menu </label>
                                        <select class="form-control mx-1" id="thursday" name="b_thursday" required>
                                            @foreach ($b_menu as $key => $m)
                                                <option value="{{ $m->id }}"
                                                    {{ $week_menu->b_thursday == $m->id ? 'selected' : '' }}>
                                                    {{ $m->name }}</option>
                                            @endforeach
                                        </select>
                                        <select class="form-control mx-1" id="thursday" name="thursday" required>
                                            @foreach ($menu as $key => $m)
                                                <option value="{{ $m->id }}"
                                                    {{ $week_menu->thursday == $m->id ? 'selected' : '' }}>
                                                    {{ $m->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group input-group-outline mb-3 d-flex">
                                        <label class="col-5" for="class">Select Friday Menu </label>
                                        <select class="form-control mx-1" id="friday" name="b_friday" required>
                                            @foreach ($b_menu as $key => $m)
                                                <option value="{{ $m->id }}"
                                                    {{ $week_menu->b_friday == $m->id ? 'selected' : '' }}>
                                                    {{ $m->name }}</option>
                                            @endforeach
                                        </select>
                                        <select class="form-control mx-1" id="friday" name="friday" required>
                                            @foreach ($menu as $key => $m)
                                                <option value="{{ $m->id }}"
                                                    {{ $week_menu->friday == $m->id ? 'selected' : '' }}>
                                                    {{ $m->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group input-group-outline mb-3 d-flex">
                                        <label class="col-5" for="class">Select Saturday Menu </label>
                                        <select class="form-control mx-1" id="saturday" name="b_saturday" required>
                                            @foreach ($b_menu as $key => $m)
                                                <option value="{{ $m->id }}"
                                                    {{ $week_menu->b_saturday == $m->id ? 'selected' : '' }}>
                                                    {{ $m->name }}</option>
                                            @endforeach
                                        </select>
                                        <select class="form-control mx-1" id="saturday" name="saturday" required>
                                            @foreach ($menu as $key => $m)
                                                <option value="{{ $m->id }}"
                                                    {{ $week_menu->saturday == $m->id ? 'selected' : '' }}>
                                                    {{ $m->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group input-group-outline mb-3 d-flex">
                                        <label class="col-5" for="class">Select Sunday Menu </label>
                                        <select class="form-control mx-1" id="sunday" name="b_sunday" required>
                                            @foreach ($b_menu as $key => $m)
                                                <option value="{{ $m->id }}"
                                                    {{ $week_menu->b_sunday == $m->id ? 'selected' : '' }}>
                                                    {{ $m->name }}</option>
                                            @endforeach
                                        </select>
                                        <select class="form-control mx-1" id="sunday" name="sunday" required>
                                            @foreach ($menu as $key => $m)
                                                <option value="{{ $m->id }}"
                                                    {{ $week_menu->sunday == $m->id ? 'selected' : '' }}>
                                                    {{ $m->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group my-2 ">
                                        <a href="{{ url()->previous() }}"><button type="button"
                                            class="btn btn-block btn-primary">Back</button></a>&nbsp;&nbsp
                                        <button type="submit" class="btn btn-block btn-success">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
