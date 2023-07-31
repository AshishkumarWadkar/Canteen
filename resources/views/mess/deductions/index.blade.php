@extends('layouts.mess.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Deductions') }}</h6>
                        </div>
                    </div>

                    <div class="card">

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
                                            <td><input type="number" class="form-control" id="b_kids_price"
                                                    name="b_kids_price"
                                                    value="{{ isset($ded->b_kids_price) ? $ded->b_kids_price : 0 }}"
                                                    placeholder="Enter Value to Deduct" required></td>
                                            <td><input type="number" class="form-control" id="m_kids_price"
                                                    name="m_kids_price"
                                                    value="{{ isset($ded->m_kids_price) ? $ded->m_kids_price : 0 }}"
                                                    placeholder="Enter Value to Deduct" required></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">V - XII Students </th>
                                            <td><input type="number" class="form-control" id="b_student_price"
                                                    name="b_student_price"
                                                    value="{{ isset($ded->b_student_price) ? $ded->b_student_price : 0 }}"
                                                    placeholder="Enter Value to Deduct" required></td>
                                            <td><input type="number" class="form-control" id="m_student_price"
                                                    name="m_student_price"
                                                    value="{{ isset($ded->m_student_price) ? $ded->m_student_price : 0 }}"
                                                    placeholder="Enter Value to Deduct" required></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Staff Member</th>
                                            <td><input type="number" class="form-control" id="b_teacher_price"
                                                    name="b_teacher_price"
                                                    value="{{ isset($ded->b_teacher_price) ? $ded->b_teacher_price : 0 }}"
                                                    placeholder="Enter Value to Deduct" required></td>
                                            <td><input type="number" class="form-control" id="m_teacher_price"
                                                    name="m_teacher_price"
                                                    value="{{ isset($ded->m_teacher_price) ? $ded->m_teacher_price : 0 }}"
                                                    placeholder="Enter Value to Deduct" required></td>
                                        </tr>

                                    </tbody>
                                </table>


                                <div class="form-group my-2 ">                                <a href="{{ url()->previous() }}"><button type="button"
                                    class="btn btn-block btn-primary">Back</button></a>&nbsp;&nbsp
                                    <button type="submit" class="btn btn-block btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
