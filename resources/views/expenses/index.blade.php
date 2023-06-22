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
                                        <label class="col-5" for="item_name">Item Name : </label>
                                        <input type="text" class="form-control" id="item_name"
                                            placeholder="First Name Middle Name Last Name" name="item_name" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="col-5" for="quantity">Quantity : </label>
                                        <input type="text" class="form-control" id="quantity" placeholder="description"
                                            name="quantity" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="col-5" for="unit">Unit : </label>
                                        <input type="text" class="form-control" id="unit" placeholder="Unit"
                                            name="unit" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="col-5" for="amount">Amount : </label>
                                        <input type="number" class="form-control" maxlength="11" id="amount"
                                            placeholder="10 Digits" name="amount" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="col-5" for="amount">Date : </label>
                                        <input type="date" class="form-control" id="date" placeholder="Enter Dates"
                                            name="date">
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
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">All Transaction History
                                </h6>
                            </div>
                        </div>
                        <div class="text-end mx-3 my-2 row align-item-center">
                            {{-- <div class="col-12 col-md-4 text-start my-auto">
                            <label class="text-uppercase text-secondary font-weight-bolder" for="from"
                                aria-autocomplete="false">Total Successfuly Amount :
                                 {{$missleanious_paid_sum}}

                        </div>
                        <div class="col-12 col-md-4 text-start my-auto">
                            <label class="text-uppercase text-secondary font-weight-bolder" for="from"
                                aria-autocomplete="false">Total Successfuly Amount :
                                 {{$missleanious_unpaid_sum}}

                        </div> --}}
                            {{-- <div class="col-12 col-md-8 my-auto d-lg-flex">
                            <form>
                                <label class="text-uppercase text-secondary font-weight-bolder" for="from"
                                    aria-autocomplete="false">From</label>
                                <input type="date" class="" id="from" name="from" required
                                    value="{{ isset($fromdate) ? $fromdate : '' }}">
                                <label class="text-uppercase text-secondary font-weight-bolder" for="to">To</label>
                                <input type="date" class="" id="to" name="to" required
                                    value="{{ isset($todate) ? $todate : '' }}">
                                <button class="btn btn-sm btn-success mt-2 mx-1" type="submit">Filter</button>
                            </form>
                            <a class="btn btn-sm btn-success mt-2 mx-1" type="submit">Reset</a>

                        </div> --}}
                        </div>

                        <div class="card-body pb-2">
                            <div class="table-responsive">
                                <table class="table mb-0 datatable text-align-center">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                #
                                            </th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Name</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Quantity</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Unit</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Amount</th>
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
                                                <td scope="row">{{ $key + 1 }}</td>
                                                <td class="text-center">{{ $ms->item_name }}</td>
                                                <td class="text-center">{{ $ms->quantity }}</td>
                                                <td class="text-center">{{ $ms->unit }}</td>
                                                <td class="text-center">{{ $ms->amount }}</td>
                                                <td class="text-center">{{ $ms->date }}</td>
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
