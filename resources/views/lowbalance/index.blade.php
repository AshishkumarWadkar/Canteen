@extends('layouts.mess.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Low Balnce') }}</h6>
                        </div>
                    </div>
                    @if (count($low))
                        <div class="card-body">
                            <div class="text-end">
                                <form action="{{ route('lowBalance.index') }}">
                                    <label class="text-uppercase text-secondary font-weight-bolder" for="from"
                                        aria-autocomplete="false">From</label>
                                    <input type="date" class="" id="from" name="from"
                                        value="{{ isset($fromdate) ? $fromdate : '' }}">
                                    <label class="text-uppercase text-secondary font-weight-bolder"
                                        for="to">To</label>
                                    <input type="date" class="" id="to" name="to"
                                        value="{{ isset($todate) ? $todate : '' }}">
                                    <button class="btn btn-sm btn-success mt-2" type="submit">Filter</button>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-sm text-center font-weight-bolder opacity-7">
                                                #</th>
                                            <th
                                                class="text-uppercase text-secondary text-sm text-start font-weight-bolder opacity-7">
                                                Name</th>
                                            <th
                                                class="text-uppercase text-secondary text-sm text-center font-weight-bolder opacity-7 ps-2">
                                                Phone</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-sm text-center font-weight-bolder opacity-7">
                                                Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($low as $k => $l)
                                            <tr>
                                                <td class="text-center">
                                                    <h6 class="mb-0 text-md">{{ $k + 1 }}</h6>
                                                </td>
                                                <td class="text-start">
                                                    <h6 class="mb-0 text-md">{{ $l->name }}</h6>
                                                </td>
                                                <td class="text-center">
                                                    <h6 class="mb-0 text-md">{{ $l->email }}</h6>
                                                </td>
                                                <td class="text-center">
                                                    <h6 class="mb-0 text-md">{{ $l->points }}</h6>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


@endsection
