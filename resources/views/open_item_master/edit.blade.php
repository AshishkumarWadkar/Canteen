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
                            <form class="needs-validation" method="POST" action="{{ route('open_item_master.update', $open_items->id) }}">
                                @method('PUT')
                                @csrf
                                <label for="name" class="form-label col-5">Item Name : </label>
                                <div class="input-group input-group-outline mb-3 d-flex">
                                    <input type="name" class="form-control" id="name"
                                        placeholder="Menu [eg. Misal Panner]" name="name" value="{{ $open_items->name }}"required>
                                </div>
                                <label for="amount" class="form-label col-5">Item amount : </label>
                                <div class="input-group input-group-outline mb-3 d-flex">
                                    <input type="amount" class="form-control" id="amount"
                                        placeholder="Menu [eg. Misal Panner]" name="amount" value="{{ $open_items->amount }}"required>
                                </div>

                                <div class="form-group my-2 text-right">
                                    <button type="submit" class="btn btn-block btn-info">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
