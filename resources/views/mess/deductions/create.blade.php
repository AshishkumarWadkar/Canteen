@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Configure Deductions') }}</div>

                    <div class="card-body">

                        <form class="needs-validation" method="POST" action="{{ route('deductions.store') }}">
                            @csrf


                            <table class="table table-striped table-responsive">
                                <thead class="thead-dark ">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">BreakFast</th>
                                        <th scope="col">Meal</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">I - IV Students </th>
                                        <td><input type="number" class="form-control" id="b_kids_prince" name="b_kids_prince" value="" placeholder="Enter Value to Deduct"
                                            required ></td>
                                        <td><input type="number" class="form-control" id="m_kids_prince" name="m_kids_prince" value="" placeholder="Enter Value to Deduct"
                                            required ></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">V - XII Students </th>
                                        <td><input type="number" class="form-control" id="b_student_prince" name="b_student_prince" value="" placeholder="Enter Value to Deduct"
                                            required ></td>
                                        <td><input type="number" class="form-control" id="m_student_prince" name="m_student_prince" value="" placeholder="Enter Value to Deduct"
                                            required ></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Staff Member</th>
                                        <td><input type="number" class="form-control" id="b_teacher_prince" name="b_teacher_prince" value="" placeholder="Enter Value to Deduct"
                                            required ></td>
                                        <td><input type="number" class="form-control" id="m_teacher_prince" name="m_teacher_prince" value="" placeholder="Enter Value to Deduct"
                                            required ></td>
                                    </tr>

                                </tbody>
                            </table>


                            <div class="form-group my-2 ">
                                <a href="{{ url()->previous() }}"><button type="button"
                                    class="btn btn-block btn-primary">Back</button></a>&nbsp;&nbsp
                                <button type="submit" class="btn btn-block btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
