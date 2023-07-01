@extends('layouts.mess.app')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Week Menus') }}</h6>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <a href="{{ route('weekly_menu.create') }}"><button class="btn btn-info mx-3 my-3">Add Weekly
                                Menus</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table class="table align-items-center mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            #</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Monday</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tuesday</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Wednesday</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Thursday</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Friday</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Satuday</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Sunday</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Start</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            End</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($weeklyMenu as $key => $wm)
                                    <tr>
                                        <td>
                                            <p class="text-xs text-center font-weight-bold mb-0">{{ $key + 1 }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center font-weight-bold mb-0">{{ $wm->b_monday > 0 ? \App\Models\MenuMaster::findOrFail($wm->b_monday)->name : "------" }} | {{ isset($wm->monday) && $wm->monday > 0 ? \App\Models\MenuMaster::findOrFail($wm->monday)->name : "------" }} </p>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center font-weight-bold mb-0">{{ $wm->b_tuesday > 0 ? \App\Models\MenuMaster::findOrFail($wm->b_tuesday)->name : "------" }} | {{ isset($wm->tuesday) && $wm->tuesday > 0 ? \App\Models\MenuMaster::findOrFail($wm->tuesday)->name : "------" }} </p>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center font-weight-bold mb-0">{{ $wm->b_wednesday > 0 ? \App\Models\MenuMaster::findOrFail($wm->b_wednesday)->name : "------" }} | {{ isset($wm->wednesday) && $wm->wednesday > 0 ? \App\Models\MenuMaster::findOrFail($wm->wednesday)->name : "------" }} </p>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center font-weight-bold mb-0">{{ $wm->b_thursday > 0 ? \App\Models\MenuMaster::findOrFail($wm->b_thursday)->name : "------" }} | {{ isset($wm->thursday) && $wm->thursday > 0 ? \App\Models\MenuMaster::findOrFail($wm->thursday)->name : "------" }} </p>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center font-weight-bold mb-0">{{ $wm->b_friday > 0 ? \App\Models\MenuMaster::findOrFail($wm->b_friday)->name : "------" }} | {{ isset($wm->friday) && $wm->friday > 0 ? \App\Models\MenuMaster::findOrFail($wm->friday)->name : "------" }} </p>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center font-weight-bold mb-0">{{ $wm->b_saturday > 0 ? \App\Models\MenuMaster::findOrFail($wm->saturday)->name : "------" }} | {{ isset($wm->saturday) && $wm->saturday > 0 ? \App\Models\MenuMaster::findOrFail($wm->saturday)->name : "------" }} </p>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center font-weight-bold mb-0">{{ $wm->b_sunday > 0 ? \App\Models\MenuMaster::findOrFail($wm->b_sunday)->name : "------" }} | {{ isset($wm->sunday) && $wm->sunday > 0 ? \App\Models\MenuMaster::findOrFail($wm->sunday)->name : "------" }} </p>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center font-weight-bold mb-0">{{  $wm->start_date }} </p>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center font-weight-bold mb-0">{{ $wm->end_date }} </p>
                                        </td>
                                        <td>
                                            <a href="{{ route('weekly_menu.edit', $wm->id) }}">
                                                <button class="btn btn-xs btn-primary py-0 mx-2">Edit</button>
                                            </a>
                                               {{-- <a> <button class="btn btn-xs btn-danger py-0"><i class="fa fa-trash"></i></button></a> --}}
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

    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
@endsection
