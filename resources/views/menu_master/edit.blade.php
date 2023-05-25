@extends('layouts.mess.app')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add New Menu ') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form class="needs-validation" method="POST" action="{{ route('menu_master.store') }}">
                            @csrf

                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="name">Menu Name : </label>
                                <input type="name" class="form-control" id="name" placeholder="Menu [eg. Misal Panner]" name="name" required>
                            </div>
                            <div class="form-check form-inline">
                                <input class="form-check-input" type="radio" name="veg_nonveg" id="veg" checked value="0">
                                <label class="form-check-label" for="veg">
                                 Veg
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="veg_nonveg" id="nonveg" value="1">
                                <label class="form-check-label" for="nonveg">
                                  Non-Veg
                                </label>
                              </div>
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="class">Menu Type: </label>
                                <select class="form-control" id="type" name="type" required>
                                   <option value="0">Break Fast</option>
                                   <option value="1">Lunch</option>
                                </select>
                            </div>
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="description">Description: </label>
                                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                            </div>
                            <div class="input-group input-group-outline mb-3 ">
                                <button type="submit" class="btn btn-block btn-warning">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

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
                                    <label for="name" class="form-label col-5">Menu Name : </label>
                                    <input type="name" class="form-control" id="name"
                                        placeholder="Menu [eg. Misal Panner]" name="name" required>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="col-5" for="class">Menu Type: </label>
                                            <select class="form-control" id="type" name="type" required>
                                                <option value="0">Break Fast</option>
                                                <option value="1">Lunch</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex">
                                        <div class="form-check">
                                            <input class="form-check-input form-control" type="radio" name="veg_nonveg"
                                                id="veg" checked value="0">
                                            <label class="form-check-label form-label" for="veg">
                                                Veg
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input form-control" type="radio" name="veg_nonveg"
                                                id="nonveg" value="1">
                                            <label class="form-check-label form-label" for="nonveg">
                                                Non-Veg
                                            </label>
                                        </div>
                                    </div>


                                </div>
                                <div class="input-group input-group-outline mb-3 d-flex">
                                    <label for="description" class="form-label">Description: </label>
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



    <script src="../../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>

@endsection
