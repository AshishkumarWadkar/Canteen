@extends('layouts.mess.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">All Settlements History </h6>
                        </div>
                    </div>
                    <div class="mx-3 my-2 row">
                        <div class="col-12">
                            <form action="{{ route('messsettlement.index') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-5"><label class="text-uppercase text-secondary font-weight-bolder"
                                            for="from" aria-autocomplete="false">From</label>
                                        <input type="date" class="form-control" id="from" name="from"
                                            value="{{ isset($from_date) ? $from_date : '' }}">
                                    </div>
                                    <div class="col-5"><label class="text-uppercase text-secondary font-weight-bolder"
                                            for="to">To</label>
                                        <input type="date" class="form-control" id="to" name="to"
                                            value="{{ isset($to_date) ? $to_date : '' }}">
                                    </div>
                                    <div class="col-2">
                                        <label class="text-uppercase text-secondary font-weight-bolder d-none"
                                            for="from" aria-autocomplete="false">From</label>
                                        <button class="btn btn-sm btn-success mt-2" type="submit">Get Data</button>
                                    </div>
                                    <br>
                                    <div class="col-3"><label class="text-uppercase text-secondary font-weight-bolder"
                                            for="amount">Total Recharge Amount</label>
                                        <input type="text" class="form-control" id="amount" name="amount"
                                            value="{{ isset($amount) ? $amount : '' }}">
                                    </div>
                                    <div class="col-3"><label class="text-uppercase text-secondary font-weight-bolder"
                                            for="amount">Total Payable Amount</label>
                                        <input type="text" class="form-control" id="payable" name="payable"
                                            value="{{ isset($payable) ? $payable : '' }}">
                                    </div>

                                    {{-- <div class="col-3"><label class="text-uppercase text-secondary font-weight-bolder"
                                            for="to">Payable</label>
                                        <input type="text" class="form-control" id="payable" name="payable"
                                            value="{{ isset($payable) ? $payable : '' }}">
                                    </div> --}}

                                    {{-- <div class="col-3"><label class="text-uppercase text-secondary font-weight-bolder"
                                            for="to">Comment</label>
                                        <input type="text" class="form-control" id="comment" name="comment"
                                            value="{{ isset($comment) ? $comment : '' }}">
                                    </div> --}}
                                    {{-- <div class="col-3">
                                        <button class="btn btn-sm btn-success mt-2" type="submit" formmethod="POST"
                                            formaction="{{ route('messsettlement.request') }}">Request</button>
                                    </div> --}}
                                </div>
                            </form>
                        </div>

                    </div>

                    <div class="card-body pb-2">

                        <div class="col-12">

                        </div>


                        <div class="table-responsive">
                            <table class="table text-center mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">From
                                            Date</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            To Date</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Total Amount</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Payable Amount</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Comment</th>
                                        {{-- @if (Auth::guard('admin')->check()) --}}
                                        {{-- <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th> --}}
                                        {{-- @endif --}}

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($stlmnt as $key => $st)
                                        <tr>
                                            <td scope="row">{{ $key + 1 }}</td>
                                            <td scope="row">{{ $st->from_date }}</td>
                                            <td scope="row">{{ $st->to_date }}</td>
                                            <td scope="row">{{ $st->total_amount }}</td>
                                            <td scope="row">{{ $st->payable_amount }}</td>
                                            <td scope="row">{{ $st->comment !=""?$st->comment : "---" }}</td>
                                            {{-- <td scope="row">
                                                <span class="badge badge-sm {{ $st->status == '1' ? 'bg-gradient-secondary' : '' }} {{ $st->status == '2' ? 'bg-gradient-success' : '' }}">{{ $st->status == '1' ? 'Requested' : 'Paid' }}</span>
                                            </td> --}}
                                            {{-- <td scope="row"> --}}
                                                {{-- @if (Auth::guard('admin')->check()) --}}
                                                {{-- <form>@csrf <button class="btn btn-sm btn-success mt-2" type="submit"
                                                        formmethod="POST"
                                                        formaction="{{ route('messsettlement.pay', $st->id) }}"
                                                        {{ $st->status == '2' ? 'disabled' : '' }}>Pay</button></form> --}}
                                                {{-- @endif --}}
                                            {{-- </td> --}}
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
