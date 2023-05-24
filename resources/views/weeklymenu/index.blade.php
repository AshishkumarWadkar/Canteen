@extends('layouts.app')

@section('content')
    <div class="container">
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
    </div>
@endsection
