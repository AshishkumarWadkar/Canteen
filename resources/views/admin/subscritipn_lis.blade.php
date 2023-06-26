@extends('layouts.admin.app')

@section('admin-content')
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
                        <div class="col-6">
                            <label class="text-uppercase text-secondary font-weight-bolder" for="from"
                                aria-autocomplete="false">Total Successfuly Amount : {{ $sum }}</label>

                        </div>
                        <div class="col-6">
                            <form action="{{ route('get_all_subscription') }}">
                                <div class="input-group input-group-outline mb-3 d-flex ">
                                    <label for="mess_id" class="col-6 col-form-label ">{{ __('Select Canteen') }}</label>
                                    @php
                                        $canteen = \App\Models\Mess::get(['id', 'name']);
                                    @endphp
                                    <div class="col-md-5">
                                        <select class="form-control" id="mess_id" name="mess_id" required>
                                            <option selected value="0">Select Canteen</option>
                                            @foreach ($canteen as $k => $c)
                                                <option  value='{{ $c->id }}' {{  $c->id == $branch ? "selected" : "" }}>{{ $c->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                    </div>

                                </div>
                                <label class="text-uppercase text-secondary font-weight-bolder" for="from"
                                    aria-autocomplete="false">From</label>
                                <input type="date" class="date  form-control" id="from" name="from" required
                                    value="{{ isset($from) ? $from : '' }}">
                                <label class="text-uppercase text-secondary font-weight-bolder" for="to">To</label>
                                <input type="date" class="date  form-control" id="to" name="to" required
                                    value="{{ isset($to) ? $to : '' }}">
                                <button class="btn btn-sm btn-success mt-2" type="submit">Filter</button>
                                {{-- <a href=""><button class="btn btn-sm btn-info mt-2">Back</button></a> --}}
                            </form>
                        </div>
                    </div>

                    <div class="card-body pb-2">
                        <div class="table-responsive">
                            <table class="table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Branch</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Phone</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amount</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PaymentId</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>


                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($tran as $key => $t)
                                        <tr>
                                            <td scope="row">{{ $key + 1 }}</td>
                                            <td class="text-start" scope="row">{{ $t->name }}</td>
                                            <td class="text-start" scope="row">{{ $t->email }}</td>
                                            <td scope="row">{{ $t->amount }}</td>
                                            <td scope="row">{{ $t->providerReferenceId }}</td>
                                            <td scope="row">{{ $t->created_at }}</td>
                                            <td scope="row"><span
                                                    class="badge badge-sm {{ $t->code == 'PAYMENT_SUCCESS' ? 'bg-gradient-success' : 'bg-gradient-danger' }} {{ $t->code == 'PAYMENT_INITIATED' ? 'bg-gradient-secondary' : '' }}">{{ str_replace('_', ' ', $t->code) }}</span>
                                            </td>
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
@endsection
