@extends('layouts.mess.app')

@section('content')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">attach_money</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-md mb-0 text-capitalize">Today's Income</p>
                            <h2 class="mb-0">{{ $todays_points }} &#x20b9;</h2>
                        </div>
                    </div>
                    <div class="card-footer p-2">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-md mb-0 text-capitalize">Total Users</p>
                            <h2 class="mb-0">{{ $total_users }}</h2>
                        </div>
                    </div>
                    <div class="card-footer p-2">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">access_time</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-md mb-0 text-capitalize">Total Today Visits</p>
                            <h2 class="mb-0">{{ $visit }}</h2>
                        </div>
                    </div>
                    <div class="card-footer p-2">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">credit_card</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-md mb-0 text-capitalize">Today's Recharge</p>
                            <h2 class="mb-0">{{ $tran }} &#x20b9;</h2>
                        </div>
                    </div>
                    <div class="card-footer p-2">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6  mb-xl-0 mb-4 mt-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">credit_card</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-md mb-0 text-capitalize">Low balance Users</p>
                            <h2 class="mb-0">{{ $low->count() }}</h2>
                        </div>
                    </div>
                    <div class="card-footer p-2">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6  mb-xl-0 mb-4 mt-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-md mb-0 text-capitalize">Today's Leaves Count</p>
                            <h2 class="mb-0">{{ $leaves_count }}</h2>
                        </div>
                    </div>
                    <div class="card-footer p-2">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6  mb-xl-0 mb-4 mt-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-md mb-0 text-capitalize">Today's Expensis Total</p>
                            <h2 class="mb-0">{{ $todays_expenses_sum }}</h2>
                        </div>
                    </div>
                    <div class="card-footer p-2">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6  mb-xl-0 mb-4 mt-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-md mb-0 text-capitalize">Today's Prebooking Total</p>
                            <h2 class="mb-0">{{ $prebookings_count }}</h2>
                        </div>
                    </div>
                    <div class="card-footer p-2">
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row mb-4 mt-3">
            <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Low Balance Sheet</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-sm text-center font-weight-bolder opacity-7">
                                            #</th>
                                        <th
                                            class="text-uppercase text-secondary text-sm text-start font-weight-bolder opacity-7">
                                            Name</th>
                                        <th
                                            class="text-uppercase text-secondary text-sm text-center font-weight-bolder opacity-7 ps-2">
                                            Phone</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-sm text-center font-weight-bolder opacity-7">
                                            Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($low as $k => $l)
                                        <tr>
                                            <td class="text-center">
                                                <h6 class="mb-0 text-md">{{ $k + 1 }}</h6>
                                            </td>
                                            <td class="text-start">
                                                <h6 class="mb-0 text-md">{{ $l->name }}</h6>
                                            </td>
                                            <td class="text-center">
                                                <h6 class="mb-0 text-md">{{ $l->email }}</h6>
                                            </td>
                                            <td class="text-center">
                                                <h6 class="mb-0 text-md">{{ $l->points }}</h6>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}

    </div>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="material-icons py-2">settings</i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">E-canteen Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
                        onclick="sidebarType(this)">Dark</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="mt-3 d-flex">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                            onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-3">
                <div class="mt-2 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                            onclick="darkMode(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
@endsection
