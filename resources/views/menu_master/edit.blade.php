@extends('layouts.app')

@section('content')
    <div class="container">
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

                            <div class="form-group my-2">
                                <label for="name">Menu Name : </label>
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
                            <div class="form-group my-2">
                                <label for="class">Menu Type: </label>
                                <select class="form-control" id="type" name="type" required>
                                   <option value="0">Break Fast</option>
                                   <option value="1">Lunch</option>
                                </select>
                            </div>
                            <div class="form-group my-2">
                                <label for="description">Description: </label>
                                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                            </div>




                            <div class="form-group my-2 ">
                                <button type="submit" class="btn btn-block btn-warning">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
