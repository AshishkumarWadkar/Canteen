@extends('layouts.mess.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Add New OPen Item') }}</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form class="needs-validation" method="POST" action="{{ route('open_item_master.store') }}">
                                @csrf
                                <div class="input-group input-group-outline mb-3 d-flex">
                                    <label for="name" class="form-label col-5">Item Name : </label>
                                    <input type="name" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="input-group input-group-outline mb-3 d-flex">
                                    <label for="amount" class="form-label col-5">Item amount : </label>
                                    <input type="amount" class="form-control" id="amount" name="amount" required>
                                </div>


                                <div class="input-group input-group-outline mb-3 d-flex justify-content-between">
                                    <a href="{{ route('menu_master.index') }}"><button type="button"
                                            class="btn btn-block btn-primary">Back</button></a>&nbsp;&nbsp;
                                    <a><button type="submit" class="btn btn-block btn-success">Save</button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
