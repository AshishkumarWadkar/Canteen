@extends('layouts.mess.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Update Student') }}</h6>
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

                        <form class="" method="POST" action="{{ route('student.update', $student->id) }}">
                            <label class="text-danger">Verify Details With User ID Cards</label>
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="role" value="{{ $student->role }}">
                            <div class="input-group input-group-outline mb-3">
                                <label class="col-5" for="name">Student's Full-Name : </label>
                                <input type="name" class="form-control" id="name" value="{{ $student->name }}"
                                    placeholder="First Name Middle Name Last Name" name="name" required>
                            </div>
                            @if ($student->role == 1)
                                <div class="input-group input-group-outline mb-3">
                                    <label class="col-5" for="class">Class: </label>
                                    <select class="form-control" id="class" name="class" required="true">
                                        <option value="0" class="form-control">Select Class</option>
                                        @foreach ($class as $c)
                                            <option class="form-control" value='{{ $c->id }}'
                                                {{ $c->id == $student->class_id ? 'selected' : '' }}>{{ $c->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="col-5" for="division">Division: </label>
                                    <select class="form-control" id="division" name="division" required>
                                        <option value="0">Select Division</option>
                                        @foreach ($division as $d)
                                            <option value={{ $d->id }}
                                                {{ $d->id == $student->division_id ? 'selected' : '' }}>{{ $d->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                            @endif
                            {{-- <div class="input-group input-group-outline mb-3">
                                <label class="col-5" for="is_subscribed">Status: </label>
                                <select class="form-control" id="is_subscribed" name="is_subscribed" required>
                                    <option value="">Select Status</option>
                                    <option value="0" {{0 == $student->is_subscribed ? "selected": ""}} >Inactive</option>
                                    <option value="1" {{1 == $student->is_subscribed ? "selected": ""}} >Active</option>


                                </select>
                            </div> --}}
                            <div class="input-group input-group-outline mb-3">
                                <label class="col-5" for="phone">Phone : </label>
                                <input type="text" class="form-control" id="phone" placeholder="10 Digits"
                                    name="phone" value="{{ $student->email }}" maxlength="10">
                            </div>

                            <div class="input-group input-group-outline mb-3 barcode ">
                                <label class="col-5" for="barcode">Barcode : </label>
                                <input type="number" class="form-control" id="barcode" name="barcode"
                                    value="{{ $student->barcode }}" placeholder="Please Scan the Card">

                            </div>
                            <div class="input-group input-group-outline mb-3 barcode ">
                                <label class="col-5" for="new_amt">Amount To be Added : </label>
                                <input type="number" class="form-control" id="new_amt" name="new_amt" value="0"
                                    placeholder="New Amount">
                            </div>

                            <div class="input-group input-group-outline mb-3 d-flex justify-content-between">
                                <a href="{{ route('student.index') }}"><button type="button"
                                        class="btn btn-block btn-primary">Back</button></a>
                                <a><button type="submit" class="btn btn-block btn-warning">Update</button></a>
                            </div>
                            @php

                                $path = \DB::table('files')
                                    ->where('user', $student->id)
                                    ->where('type', 1)
                                    ->first();
                            @endphp
                            @isset($path->file_path)
                                Activation Screenshot
                                <img src="{{ asset($path->file_path) }}"
                                    style="
                                        height: 300px;
                                        width: 50%;
                                        object-fit: cover; // here">
                            @endisset

                            @php

                                $top = \DB::table('files')
                                    ->where('user', $student->id)
                                    ->where('type', 2)
                                    ->get();
                            @endphp
                            @isset($top)
                                @foreach ($top as $t)
                                    <br>Recharge Screenshot
                                    <img src="{{ asset($t->file_path) }}"
                                        style="
                                        height: 300px;
                                        width: 50%;
                                        object-fit: cover; // here">
                                @endforeach
                            @endisset
                        </form>
                        @if(count($prev_point))
                        <div class="container py-4">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="card my-4">
                                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                                <h6 class="text-white text-capitalize ps-3">Previous points</h6>
                                            </div>
                                        </div>


                                        <div class="card-body pb-2">
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#
                                                            </th>
                                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Points</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Date</th>


                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach ($prev_point as $key => $p)
                                                            <tr>
                                                                <td scope="row">{{ $key + 1 }}</td>
                                                                <td class="text-start" scope="row">{{ $p->points }}</td>
                                                                <td class="text-start" scope="row">{{ $p->created_at }}</td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <div class="col-12 col-md-4 text-start my-auto">
                            <label class="text-uppercase text-secondary font-weight-bolder" for="from"
                                aria-autocomplete="false">Total Successfuly Amount :
                                {{ $student_recharge_histotry_sum }}</label>

                        </div>
                        <div class="col-12 col-md-8 my-auto d-lg-flex">
                            <form action="{{ route('student.edit', $student->id) }}">
                                <label class="text-uppercase text-secondary font-weight-bolder" for="from"
                                    aria-autocomplete="false">From</label>
                                <input type="date" class="" id="from" name="from" required
                                    value="{{ isset($fromdate) ? $fromdate : '' }}">
                                <label class="text-uppercase text-secondary font-weight-bolder" for="to">To</label>
                                <input type="date" class="" id="to" name="to" required
                                    value="{{ isset($todate) ? $todate : '' }}">
                                <button class="btn btn-sm btn-success mt-2 mx-1" type="submit">Filter</button>
                            </form>
                            <a href="{{ route('student.edit', $student->id) }}" class="btn btn-sm btn-success mt-2 mx-1"  type="submit">Reset</a>

                        </div>
                    </div>

                    <div class="card-body pb-2">
                        <div class="table-responsive">
                            <table class="table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#
                                        </th>

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
                                    @foreach ($student_recharge_histotry as $key => $t)
                                        <tr>
                                            <td scope="row">{{ $key + 1 }}</td>

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
