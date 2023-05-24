@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update Student') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form class="" method="POST" action="{{ route('student.update',$student->id) }}">
                            <span class="text-danger">Verify Details With Id Cards of College</span>
                            @csrf
                            @method("PUT")
                            {{-- <div class="form-group my-2  form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="existing" name="existing" onchange="showbarcode()">
                                <label class="form-check-label" for="existing">
                                    Existing Student
                                </label>
                            </div> --}}


                            <div class="form-group my-2">
                                <label for="name">Student's Full-Name : </label>
                                <input type="name" class="form-control" id="name" value="{{ $student->name }}" placeholder="First Name Middle Name Last Name" name="name" required>
                            </div>
                            @if ($student->role == 1)




                            <div class="form-group my-2">
                                <label for="class">Class: </label>
                                <select class="form-control" id="class" name="class" required="true">
                                    <option value="0">Select Class</option>
                                    @foreach ($class as $c)
                                    <option value='{{ $c->id }}' {{ $c->id == $student->class_id ? "selected" : ""}}>{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group my-2">
                                <label for="division">Division: </label>
                                <select class="form-control" id="division" name="division" required>
                                    <option value="0">Select Division</option>
                                    @foreach ($division as $d)
                                        <option value={{ $d->id }} {{ $c->id == $student->division_id ? "selected": ""}}>{{ $d->name }}</option>

                                    @endforeach

                                </select>
                            </div>
                            @endif
                            <div class="form-group my-2">
                                <label for="phone">Phone : </label>
                                <input type="text" class="form-control" id="phone" placeholder="10 Digits" name="phone" value="{{ $student->email }}"  maxlength="10">
                            </div>

                            <div class="form-group my-2 barcode ">
                                <label for="barcode">Barcode : </label>
                                <input type="number" class="form-control" id="barcode" name="barcode" value="{{ $student->barcode }}" placeholder="Please Scan the Card"
                                     required >

                            </div>

                            <div class="form-group my-2 ">
                                <a href="{{ url()->previous() }}"><button type="button" class="btn btn-block btn-secondary">Back</button></a>
                                <button type="submit" class="btn btn-block btn-warning">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
