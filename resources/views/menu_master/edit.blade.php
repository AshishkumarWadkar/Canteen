@extends('layouts.mess.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Edit Menu Item ') }}</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form class="needs-validation" method="POST" action="{{ route('menu_master.update', $menu->id) }}">
                                @method('PUT')
                                @csrf
                                <label for="name" class="form-label col-5">Menu Name : </label>
                                <div class="input-group input-group-outline mb-3 d-flex">
                                    <input type="name" class="form-control" id="name"
                                        placeholder="Menu [eg. Misal Panner]" name="name" value="{{ $menu->name }}"required>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="col-5" for="class">Menu Type: </label>
                                            <select class="form-control" id="type" name="type" required>
                                                <option value="0" {{ $menu->type == 0 ? "selected" :""}} >Break Fast</option>
                                                <option value="1" {{ $menu->type == 1 ? "selected" :"" }}>Lunch</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="veg_nonveg" value="0">
                                </div>
                                <label for="description" class="form-label">Description: </label>
                                <div class="input-group input-group-outline mb-3 d-flex">
                                    <textarea class="form-control" id="description" rows="3" name="description" style="height: 115px;">{{ $menu->description }}</textarea>
                                </div>
                                <div class="form-group my-2 ">
                                    <a href="{{ url()->previous() }}"><button type="button"
                                        class="btn btn-block btn-primary">Back</button></a>&nbsp;&nbsp
                                    <button type="submit" class="btn btn-block btn-warning">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
