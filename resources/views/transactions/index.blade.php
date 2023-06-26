@extends('layouts.mess.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">All Transaction History</h6>
                        </div>
                    </div>
                    <div class="mx-3 my-2 row">
                        <div class="col-4 my-auto">
                            <label class="text-uppercase text-secondary font-weight-bolder" for="from"
                                aria-autocomplete="false">Total Successfuly Amount : {{ $sum }}</label>

                        </div>
                        <div class="col-8 d-flex justify-content-between">
                            <div class="col-4">
                                <label class="text-uppercase text-secondary font-weight-bolder" for="from"
                                    aria-autocomplete="false">From</label>
                                <input type="date" class="date  form-control" id="from" name="from" required
                                    value="{{ isset($from) ? $from : '' }}">
                            </div>
                            <div class="col-4">
                                <label class="text-uppercase text-secondary font-weight-bolder" for="to">To</label>
                                <input type="date" class="date  form-control" id="to" name="to" required
                                    value="{{ isset($to) ? $to : '' }}">
                            </div>
                            <div class="col-2 mt-auto">
                                <button class="btn btn-sm btn-success mt-2" type="submit">Filter</button>
                            </div>
                        </div>



                    </div>

                    {{-- <form action="{{ route('transactions.index') }}">
                        <div class="row">
                            <div class="col-5">
                                <label class="text-uppercase text-secondary font-weight-bolder" for="from"
                                    aria-autocomplete="false">From</label>
                                <input type="date" class="date  form-control" id="from" name="from" required
                                    value="{{ isset($from) ? $from : '' }}">
                            </div>
                            <div class="col-5">
                                <label class="text-uppercase text-secondary font-weight-bolder"
                                    for="to">To</label>
                                <input type="date" class="date  form-control" id="to" name="to" required
                                    value="{{ isset($to) ? $to : '' }}">
                            </div>

                        </div>
                    </form> --}}

                    <div class="card-body pb-2">
                        <div class="table-responsive">
                            <table class="table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Phone</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Amount</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            PaymentId</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Date</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>

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
