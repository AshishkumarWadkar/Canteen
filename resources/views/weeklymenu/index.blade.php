@extends('layouts.mess.app')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('All Student') }}</div>


                        <a href="{{ route('weekly_menu.create') }}"><button class="btn btn-xs btn-primary py-0 mx-2">Add Weekly Menus</button></a>

                        <table class="table table-striped table-responsive">
                            <thead class="thead-dark ">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Monday</th>
                                    <th scope="col">Tuesday</th>
                                    <th scope="col">Wednesday</th>
                                    <th scope="col">Thursday</th>
                                    <th scope="col">Friday</th>
                                    <th scope="col">Satuday</th>
                                    <th scope="col">Sunday</th>
                                    <th scope="col">Menu Start</th>
                                    <th scope="col">Menu End</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($weeklyMenu as $key => $wm)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $wm->monday > 0 ? \App\Models\MenuMaster::findOrFail($wm->monday)->name : "------" }} | {{ $wm->b_monday > 0 ? \App\Models\MenuMaster::findOrFail($wm->b_monday)->name : "------" }} </td>
                                        <td>{{ $wm->tuesday > 0 ? \App\Models\MenuMaster::findOrFail($wm->tuesday)->name : "------" }} | {{ $wm->b_tuesday > 0 ? \App\Models\MenuMaster::findOrFail($wm->b_tuesday)->name : "------" }} </td>
                                        <td>{{ $wm->wednesday > 0 ? \App\Models\MenuMaster::findOrFail($wm->wednesday)->name : "------" }} | {{ $wm->b_wednesday > 0 ? \App\Models\MenuMaster::findOrFail($wm->b_wednesday)->name : "------" }} </td>
                                        <td>{{ $wm->thursday > 0 ? \App\Models\MenuMaster::findOrFail($wm->thursday)->name : "------" }} | {{ $wm->b_thursday > 0 ? \App\Models\MenuMaster::findOrFail($wm->b_thursday)->name : "------" }} </td>
                                        <td>{{ $wm->friday > 0 ? \App\Models\MenuMaster::findOrFail($wm->friday)->name : "------" }} | {{ $wm->b_friday > 0 ? \App\Models\MenuMaster::findOrFail($wm->b_friday)->name : "------" }} </td>
                                        <td>{{ $wm->saturday > 0 ? \App\Models\MenuMaster::findOrFail($wm->saturday)->name : "------" }} | {{ $wm->b_saturday > 0 ? \App\Models\MenuMaster::findOrFail($wm->saturday)->name : "------" }} </td>
                                        <td>{{ $wm->sunday > 0 ? \App\Models\MenuMaster::findOrFail($wm->sunday)->name : "------" }} | {{ $wm->b_sunday > 0 ? \App\Models\MenuMaster::findOrFail($wm->b_sunday)->name : "------" }} </td>

                                        <td>{{ $wm->start_date }} </td>
                                        <td>{{ $wm->end_date }} </td>

                                        <td>
                                            <a href="{{ route('weekly_menu.edit', $wm->id) }}">
                                                <button class="btn btn-xs btn-primary py-0 mx-2">Edit</button>
                                            </a>
                                                <button class="btn btn-xs btn-danger py-0">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>



                </div>
            </div>
        </div>
    </div> --}}

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('All Student') }}</h6>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <a href="{{ route('weekly_menu.create') }}"><button class="btn btn-info mx-3 my-3">Add Weekly
                                Menus</button></a>
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
                                            Menu</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Menu</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($weeklyMenu as $key => $wm)
                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $key + 1 }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $wm->monday > 0 ? \App\Models\MenuMaster::findOrFail($wm->monday)->name : "------" }} | {{ $wm->b_monday > 0 ? \App\Models\MenuMaster::findOrFail($wm->b_monday)->name : "------" }} </p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $wm->tuesday > 0 ? \App\Models\MenuMaster::findOrFail($wm->tuesday)->name : "------" }} | {{ $wm->b_tuesday > 0 ? \App\Models\MenuMaster::findOrFail($wm->b_tuesday)->name : "------" }} </p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $wm->wednesday > 0 ? \App\Models\MenuMaster::findOrFail($wm->wednesday)->name : "------" }} | {{ $wm->b_wednesday > 0 ? \App\Models\MenuMaster::findOrFail($wm->b_wednesday)->name : "------" }} </p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $wm->thursday > 0 ? \App\Models\MenuMaster::findOrFail($wm->thursday)->name : "------" }} | {{ $wm->b_thursday > 0 ? \App\Models\MenuMaster::findOrFail($wm->b_thursday)->name : "------" }} </p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $wm->friday > 0 ? \App\Models\MenuMaster::findOrFail($wm->friday)->name : "------" }} | {{ $wm->b_friday > 0 ? \App\Models\MenuMaster::findOrFail($wm->b_friday)->name : "------" }} </p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $wm->saturday > 0 ? \App\Models\MenuMaster::findOrFail($wm->saturday)->name : "------" }} | {{ $wm->b_saturday > 0 ? \App\Models\MenuMaster::findOrFail($wm->saturday)->name : "------" }} </p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $wm->sunday > 0 ? \App\Models\MenuMaster::findOrFail($wm->sunday)->name : "------" }} | {{ $wm->b_sunday > 0 ? \App\Models\MenuMaster::findOrFail($wm->b_sunday)->name : "------" }} </p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $wm->start_date }} </p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $wm->end_date }} </p>
                                        </td>
                                        <td>
                                            <a href="{{ route('weekly_menu.edit', $wm->id) }}">
                                                <button class="btn btn-xs btn-primary py-0 mx-2">Edit</button>
                                            </a>
                                               <a> <button class="btn btn-xs btn-danger py-0">Delete</button></a>
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
