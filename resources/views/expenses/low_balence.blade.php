@extends('layouts.mess.app')

@section('content')
    @if (count($low_balence))
        <div class="row mb-4 mt-3">
            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('low_balences') }}</h6>
                        </div>
                    </div>
                    <div class="card-body pb-2">
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
                                    @foreach ($low_balence as $k => $l)
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
                </div>
            </div>
        </div>
    @endif

@endsection
