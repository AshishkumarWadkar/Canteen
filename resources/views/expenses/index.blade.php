@extends('layouts.mess.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Expenses') }}</h6>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                @php
                                    toastr()->addError($error);
                                @endphp
                            @endforeach
                        @endif

                        <form class="" method="POST" action="{{ route('expenses.store') }}">

                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="col-5" for="item_name">Product Name : </label>
                                        <input type="text" class="form-control" id="item_name"
                                            placeholder="Product Name Example(Potato)" name="item_name" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="col-5" for="quantity">Quantity : </label>
                                        <input type="Number" class="form-control" id="quantity" placeholder="Quantity in Number"
                                            name="quantity" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="col-5" for="unit">Unit : </label>
                                        <input type="text" class="form-control" id="unit" placeholder="[g, Ml, Kg, L, Pieces, Dozen]"
                                            name="unit" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="col-5" for="amount">Amount : </label>
                                        <input type="number" class="form-control" maxlength="11" id="amount"
                                            placeholder="Amount in Rupees" name="amount" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="col-5" for="amount">Date : </label>
                                        <input type="date" class="form-control" id="date" placeholder="Enter Dates"
                                            name="date" value="<?php echo date("Y-m-d"); ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="col-5" for="class">Payment Mode :</label>
                                        <select class="form-control" id="payment_mode" name="payment_mode" required>
                                            <option value=""selected>Select</option>
                                            <option value="Cash" >Cash</option>
                                            <option value="UPI">UPI</option>
                                            <option value="Khata">Khata</option>
                                        </select>
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
    @if (count($expenses))
        <div class="container-fluid py-4">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">All Expenses History
                                </h6>
                            </div>
                        </div>
                        <div class="text-end mx-3 my-2 row align-item-center">

                        </div>

                        <div class="card-body pb-2">
                            <div class="table-responsive">
                                <table class="table mb-0 datatable text-align-center">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                #Sr.no
                                            </th>
                                            <th
                                                class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Name</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Quantity</th>

                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Amount</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Mode</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Date</th>
                                            {{-- <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Action</th> --}}

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($expenses as $key => $ms)
                                            <tr>
                                                <td scope="row text-center">{{ $key + 1 }}</td>
                                                <td class="text-start">{{ $ms->item_name }}</td>
                                                <td class="text-start">{{ $ms->quantity }} {{ $ms->unit }}</td>
                                                <td class="text-center">{{ $ms->amount }}</td>
                                                <td class="text-center">{{ $ms->payment_mode }}</td>
                                                <td class="text-center">{{  \Carbon\Carbon::parse($ms->date)->format('d-m-Y') }}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
