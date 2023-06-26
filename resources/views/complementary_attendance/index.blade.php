@extends('layouts.mess.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                          <h6 class="text-white text-capitalize ps-3">{{ __('Complentary Meal Marking') }}</h6>
                        </div>
                      </div>

                    <div class="card-body">
                        @if (!empty($success))
                            <div class="alert alert-success">
                                {{ $success }}
                            </div>
                        @endif
                        @if (!empty($error))
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endif


                        <form class="needs-validation" method="POST" action="{{ route('complementary_attendance.store') }}">
                            @csrf

                            <div class="text-end mx-3 my-2">
                                <a href="{{ route('attendance_all') }}"><span class="badge badge-sm bg-gradient-info">All Consumed Complentary Meals</span></a>
                                </div>
                            <label class="form-label" for="barcode">Event : </label>
                            <div class="input-group input-group-outline mb-1 barcode">
                                <select class="form-control" id="event" name="event" required="true">
                                    <option value="0" class="form-control">Select Event</option>
                                    @foreach ($event as $e)
                                        <option class="form-control" value='{{ $e->id }}'
                                            {{ isset($set_event) && $e->id == $set_event ? 'selected' : '' }}>{{ $e->event_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="form-label" for="barcode">Barcode : </label>
                            <div class="input-group input-group-outline mb-1 barcode">
                                <input type="number" class="form-control" id="barcode" name="barcode" value=""
                                    placeholder="Please Scan the Card" required min="0">
                            </div>

                            <div class="input-group input-group-outline mb-3 d-flex justify-content-between">
                                <a href="{{ url()->previous() }}"><button type="button"
                                    class="btn btn-block btn-primary">Back</button></a>&nbsp;&nbsp;
                                    <a><button type="submit" class="btn btn-block btn-success">Punch</button></a>
                                </div>
                            </form>

                        <label for="name" class="form-label">Name</label>
                        <div class="input-group input-group-outline mb-3">
                            <input type="name" class="form-control" id="name"
                                placeholder="First Name Middle Name Last Name" name="name"
                                value="{{ isset($student) && isset($student->name) ? $student->name : '' }}" readonly>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body px-0 pb-2">
                                        <div class="table-responsive p-0">
                                            <table class="table align-items-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            #</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            Name</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Marked at</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Event</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @isset($todays_punch)
                                                        @foreach ($todays_punch as $key => $tp)
                                                            <tr>
                                                                <td>
                                                                    <p class="text-xs font-weight-bold mb-0">{{ $key+1 }}
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <p class="text-xs font-weight-bold mb-0">{{ $tp->name }}
                                                                    </p>
                                                                </td>
                                                                <td class="text-center">
                                                                    <p class="text-xs font-weight-bold mb-0">
                                                                        {{ $tp->created_at }}
                                                                    </p>
                                                                </td>
                                                                <td  class="text-center">
                                                                    <p class="text-xs font-weight-bold mb-0">{{ $tp->event_name }}
                                                                    </p>
                                                                </td>

                                                            </tr>
                                                        @endforeach
                                                    @endisset
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
