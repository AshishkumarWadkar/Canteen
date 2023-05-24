@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Weekly  Menus ') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form class="needs-validation" method="POST" action="{{ route('weekly_menu.update',$week_menu->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group my-2 form-inline">
                                <label for="class">Select Monday Menu </label>
                                <input type="week" name="week" id="week" value="{{ $week_menu->week_no }}">
                            </div>
                            <div class="form-group my-2 form-inline">
                                <label for="class">Select Monday Menu </label>
                                <select class="form-control" id="monday" name="monday" required>
                                    @foreach ($menu as $key => $m)
                                        <option value="{{ $m->id }}" {{ $week_menu->monday == $m->id ? "selected" : "" }}>{{ $m->name }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control" id="monday" name="b_monday" required>
                                    @foreach ($b_menu as $key => $m)
                                        <option value="{{ $m->id }}" {{ $week_menu->b_monday == $m->id ? "selected" : "" }}>{{ $m->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group my-2 form-inline">
                                <label for="class">Select Tuesday Menu </label>
                                <select class="form-control" id="tuesday" name="tuesday" required>
                                    @foreach ($menu as $key => $m)
                                        <option value="{{ $m->id }}" {{ $week_menu->tuesday == $m->id ? "selected" : "" }}>{{ $m->name }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control" id="tuesday" name="b_tuesday" required>
                                    @foreach ($b_menu as $key => $m)
                                        <option value="{{ $m->id }}" {{ $week_menu->b_tuesday == $m->id ? "selected" : "" }}>{{ $m->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group my-2 form-inline">
                                <label for="class">Select Wednesday Menu </label>
                                <select class="form-control" id="wednesday" name="wednesday" required>
                                    @foreach ($menu as $key => $m)
                                        <option value="{{ $m->id }}" {{ $week_menu->wednesday == $m->id ? "selected" : "" }}>{{ $m->name }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control" id="wednesday" name="b_wednesday" required>
                                    @foreach ($b_menu as $key => $m)
                                        <option value="{{ $m->id }}" {{ $week_menu->b_wednesday == $m->id ? "selected" : "" }}>{{ $m->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group my-2 form-inline">
                                <label for="class">Select Thursday Menu </label>
                                <select class="form-control" id="thursday" name="thursday" required>
                                    @foreach ($menu as $key => $m)
                                        <option value="{{ $m->id }}" {{ $week_menu->thursday == $m->id ? "selected" : "" }}>{{ $m->name }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control" id="thursday" name="b_thursday" required>
                                    @foreach ($b_menu as $key => $m)
                                        <option value="{{ $m->id }}" {{ $week_menu->b_thursday == $m->id ? "selected" : "" }}>{{ $m->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group my-2 form-inline">
                                <label for="class">Select Friday Menu </label>
                                <select class="form-control" id="friday" name="friday" required>
                                    @foreach ($menu as $key => $m)
                                        <option value="{{ $m->id }}" {{ $week_menu->friday == $m->id ? "selected" : "" }}>{{ $m->name }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control" id="friday" name="b_friday" required>
                                    @foreach ($b_menu as $key => $m)
                                        <option value="{{ $m->id }}" {{ $week_menu->b_friday == $m->id ? "selected" : "" }}>{{ $m->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group my-2 form-inline">
                                <label for="class">Select Saturday Menu </label>
                                <select class="form-control" id="saturday" name="saturday" required>
                                    @foreach ($menu as $key => $m)
                                        <option value="{{ $m->id }}" {{ $week_menu->saturday == $m->id ? "selected" : "" }}>{{ $m->name }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control" id="saturday" name="b_saturday" required>
                                    @foreach ($b_menu as $key => $m)
                                        <option value="{{ $m->id }}" {{ $week_menu->b_saturday == $m->id ? "selected" : "" }}>{{ $m->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group my-2 form-inline">
                                <label for="class">Select Sunday Menu </label>
                                <select class="form-control" id="sunday" name="sunday" required>
                                    @foreach ($menu as $key => $m)
                                        <option value="{{ $m->id }}" {{ $week_menu->sunday == $m->id ? "selected" : "" }}>{{ $m->name }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control" id="sunday" name="b_sunday" required>
                                    @foreach ($b_menu as $key => $m)
                                        <option value="{{ $m->id }}" {{ $week_menu->b_sunday == $m->id ? "selected" : "" }}>{{ $m->name }}</option>
                                    @endforeach
                                </select>
                            </div>




                            <div class="form-group my-2 ">
                                <button type="submit" class="btn btn-block btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

