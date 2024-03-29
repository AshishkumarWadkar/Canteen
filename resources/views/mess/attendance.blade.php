@extends('layouts.mess.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mb-5">
            <div class="col-md-7 col-12">
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Attendance') }}</h6>
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


                        <form class="needs-validation" method="POST" action="{{ route('attendance.store') }}">
                            @csrf

                            <div class="text-end mx-3 my-2">
                                <a href="{{ route('attendance_all') }}"><span class="badge badge-sm bg-gradient-info">All
                                        Consumed Meals</span></a>
                            </div>
                            <label class="form-label" for="barcode">Barcode : </label>
                            <div class="input-group input-group-outline mb-3 barcode">
                                <input type="number" class="form-control" id="barcode" name="barcode" value=""
                                    placeholder="Please Scan the Card" required min="0">
                            </div>
                            <div class="input-group input-group-outline mb-3 barcode ">
                                <label for="barcode" class="col-3">Meal Type : </label>
                                <div class="form-check form-check-inline mx-4">
                                    <input class="form-check-input" type="radio" name="meal_type" id="break_fast"
                                        value="1">
                                    <label class="form-check-label" for="break_fast">BreakFast</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="meal_type" id="lunch"
                                        value="2">
                                    <label class="form-check-label" for="lunch">Lunch</label>
                                </div>
                            </div>
                            <label for="name" class="form-label">Name</label>
                            <div class="input-group input-group-outline mb-3">
                                <input type="name" class="form-control" id="name"
                                    placeholder="First Name Middle Name Last Name" name="name"
                                    value="{{ isset($student) && isset($student->name) ? $student->name : '' }}" readonly>
                            </div>

                            <label for="phone" class="form-label">Phone</label>
                            <div class="input-group input-group-outline mb-3">
                                <input type="text" class="form-control" id="phone" placeholder="10 Digits"
                                    name="phone"
                                    value="{{ isset($student) && isset($student->email) ? $student->email : '' }}"
                                    maxlength="10" readonly>
                            </div>
                            <label for="phone" class="form-label">Current Balance : </label>
                            <div class="input-group input-group-outline mb-3">
                                <input type="text" class="form-control" id="balance" placeholder="10 Digits"
                                    name="balance" value="{{ isset($balance) ? $balance : 0 }}" maxlength="10" readonly>
                            </div>


                            <div class="input-group input-group-outline mb-3 d-flex justify-content-between">
                                <a href="{{ url()->previous() }}"><button type="button"
                                        class="btn btn-block btn-primary">Back</button></a>&nbsp;&nbsp;
                                <a><button type="submit" class="btn btn-block btn-success">Punch</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-12">
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Open Item') }}</h6>
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


                        <form class="needs-validation" method="POST" action="{{ route('open_item.store') }}">
                            @csrf


                            <div class="input-group input-group-outline mb-3">
                            @php($open_items = App\Models\OpenItemMaster::where('mess_id','=',\Auth::id())->get())
                                <label class="col-5" for="class">Item Name: </label>
                                <select class="form-control mx-1 select" id="type" name="open_item_id" required>
                                    <option value="" selected>Select Open Item</option>
                                    @foreach ($open_items as $oi)
                                        <option value="{{ $oi->id }}">
                                            {{ $oi->name }}&nbsp;&nbsp;&nbsp;{{ $oi->amount }} &#x20b9;</option>
                                    @endforeach
                                </select>


                            </div>
                            <label for="open_item_quantity" class="form-label">Quantity</label>
                            <select class="form-control mx-1 select" id="open_item_quantity" name="open_item_quantity" required>
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                            </select>
                            <label class="form-label" for="barcode">Barcode : </label>
                            <div class="input-group input-group-outline mb-3 barcode">
                                <input type="number" class="form-control" id="barcode" name="barcode" value=""
                                    placeholder="Please Scan the Card" required min="0">
                            </div>

                            <label for="name" class="form-label">Name</label>
                            <div class="input-group input-group-outline mb-3">
                                <input type="name" class="form-control" id="name"
                                    placeholder="First Name Middle Name Last Name" name="name"
                                    value="{{ isset($student) && isset($student->name) ? $student->name : '' }}" readonly>
                            </div>

                            <label for="phone" class="form-label">Phone</label>
                            <div class="input-group input-group-outline mb-3">
                                <input type="text" class="form-control" id="phone" placeholder="10 Digits"
                                    name="phone"
                                    value="{{ isset($student) && isset($student->email) ? $student->email : '' }}"
                                    maxlength="10" readonly>
                            </div>
                            <label for="phone" class="form-label">Current Balance : </label>
                            <div class="input-group input-group-outline mb-3">
                                <input type="text" class="form-control" id="balance" placeholder="10 Digits"
                                    name="balance" value="{{ isset($balance) ? $balance : 0 }}" maxlength="10" readonly>
                            </div>


                            <div class="input-group input-group-outline mb-3 d-flex justify-content-between">
                                <a href="{{ url()->previous() }}"><button type="button"
                                        class="btn btn-block btn-primary">Back</button></a>&nbsp;&nbsp;
                                <a><button type="submit" class="btn btn-block btn-success">Punch</button></a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-7">
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Attendance') }}</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            #</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Name</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Marked at</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Amount Deducted</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Remaining Balance</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Meal</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @isset($todays_punch)
                                        @foreach ($todays_punch as $key => $tp)
                                            <tr>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $key + 1 }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $tp->name }}
                                                    </p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $tp->punch_time }}
                                                    </p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $tp->deduction_point }}
                                                    </p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $tp->points }}
                                                    </p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span
                                                        class="badge badge-sm bg-gradient-{{ $tp->meal_type == 1 ? 'success' : 'primary' }}">{{ $tp->meal_type == 1 ? 'BreakFast' : 'Lunch' }}</span>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <form action="{{ route('attendance.destroy', $tp->id) }}" method="POST">
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        {{ csrf_field() }}

                                                        <span
                                                            class=" show_confirm badge badge-sm bg-gradient-danger">Delete</span>
                                                    </form>
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
            <div class="col-5">
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Open item') }}</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            #</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Item Name</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Item Quantity</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            user Name</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Amount Deducted</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Marked at</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Remaining Balance</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @isset($todays_opent_item_punch)
                                        @foreach ($todays_opent_item_punch as $key => $tp)
                                            <tr>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $key + 1 }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $tp->item_name }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $tp->quantity }}
                                                    </p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $tp->user_name }}
                                                    </p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $tp->deduction_point }}
                                                    </p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $tp->punch_time }}
                                                    </p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $tp->user_point }}
                                                    </p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <form action="{{ route('open_item.destroy', $tp->id) }}" method="POST">
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        {{ csrf_field() }}

                                                        <span
                                                            class="show_confirm badge badge-sm bg-gradient-danger">Delete</span>
                                                    </form>
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

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.getElementById("barcode").focus();



            $(document).ready(function() {
                $('.select').select2();
            });
        })

        const hour = new Date().getHours();
        if (hour < 12) {

            document.getElementById("break_fast").checked = true;
        } else {
            document.getElementById("lunch").checked = true;
        };
    </script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this record?`,
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

@endsection
