@extends('layouts.mess.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Add Miscellaneous Entries') }}</h6>
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

                        <form class="" method="POST" action="{{ route('missleanious.store') }}">

                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="col-5" for="name">Title : </label>
                                        <input type="name" class="form-control" id="name" placeholder="Title"
                                            name="name" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="col-5" for="name">Description : </label>
                                        <input type="text" class="form-control" id="name" placeholder="Description"
                                            name="description" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="col-5" for="class">Paid Status: </label>
                                        <select class="form-control" id="type" name="paid_status" required>
                                            <option value="">Select</option>
                                            <option value="0" selected>Unpaid</option>
                                            <option value="1">Paid</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="col-5" for="amount">Amount : </label>
                                        <input type="number" class="form-control" maxlength="11" id="amount"
                                            placeholder="Amount" name="amount" maxlength="10">
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
    @if (count($missleanious))
        <div class="container-fluid py-4">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">All Miscellaneous Entries
                                </h6>
                            </div>
                        </div>
                        <div class="text-end mx-3 my-2 row align-item-center">
                            <div class="col-12 col-md-4 text-start my-auto">
                                <label class="text-uppercase text-secondary font-weight-bolder" for="from"
                                    aria-autocomplete="false">Total Successfuly Amount :
                                    {{ $missleanious_paid_sum }}

                            </div>
                            <div class="col-12 col-md-4 text-start my-auto">
                                <label class="text-uppercase text-secondary font-weight-bolder" for="from"
                                    aria-autocomplete="false">Total Successfuly Amount :
                                    {{ $missleanious_unpaid_sum }}

                            </div>
                            <div class="col-12 col-md-12 my-auto d-lg-flex justify-content-end">
                                <form action="{{ route('missleanious.index') }}">
                                    <label class="text-uppercase text-secondary font-weight-bolder" for="from"
                                        aria-autocomplete="false">From</label>
                                    <input type="date" class="" id="from" name="from" required
                                        value="{{ isset($fromdate) ? $fromdate : '' }}">
                                    <label class="text-uppercase text-secondary font-weight-bolder"
                                        for="to">To</label>
                                    <input type="date" class="" id="to" name="to" required
                                        value="{{ isset($todate) ? $todate : '' }}">
                                    <button class="btn btn-sm btn-success mt-2 mx-1" type="submit">Filter</button>
                                </form>
                                {{-- <a class="btn btn-sm btn-success mt-2 mx-1" type="submit">Reset</a> --}}

                            </div>
                        </div>

                        <div class="card-body pb-2">
                            <div class="table-responsive">
                                <table class="table mb-0 datatable">
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
                                                Description</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Amount</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Date</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Status</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Action</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($missleanious as $key => $ms)
                                            <tr>
                                                <td scope="row">{{ $key + 1 }}</td>
                                                <td class="text-start">{{ $ms->name }}</td>
                                                <td class="text-start">{{ $ms->description }}</td>
                                                <td class="text-start">{{ $ms->amount }}</td>
                                                <td class="text-start">{{ $ms->updated_at }}</td>
                                                <td class="align-middle text-center ">
                                                    <span
                                                        class="badge badge-sm bg-gradient-{{ $ms->paid_status == 1 ? 'success' : 'primary' }}">{{ $ms->paid_status == 1 ? 'Paid' : 'Unpaid' }}</span>
                                                </td>

                                                <td class="text-start align-middle text-center ">
                                                    {{-- <button type="button"
                                                                    class="btn btn-sm btn-primary" {{ $ms->paid_status == 1 ? 'disabled' : '' }}>
                                                                                <a href="{{ route('misslenious_status_update',$ms->id) }}">Change Status</a></button> --}}


                                                    <form action="{{ route('misslenious_status_update', $ms->id) }}"
                                                        method="GEt">
                                                        {{ csrf_field() }}

                                                        <button type="button"
                                                                    class="btn btn-sm btn-primary show_confirm" {{ $ms->paid_status == 1 ? 'disabled' : '' }}>
                                                                               Change Status</button>
                                                    </form>


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
        <script>
             $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to Change Status this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
            </script>
    @endif

@endsection
