<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'E-canteen') }}</title>
    {{-- New CDN Added by ashish --}}

    <script src="{{ asset('assets/js/core/jquery.js') }}"></script>

    <link src="{{ asset('assets/css/core/jquery.dataTables.min.css') }}">
    <link  rel="stylesheet" src="{{ asset('assets/css/core/datatables.min.css') }}">


    <link
        href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/date-1.4.1/fc-4.2.2/fh-3.3.2/r-2.4.1/sc-2.1.1/sb-1.4.2/datatables.min.css"
        rel="stylesheet" />

        <script src="{{asset('assets/js/core/pdfmake.min.js')}}"></script>
        <script src="{{asset('assets/js/core/datatables.min.js')}}"></script>
        <script src="{{asset('assets/js/core/vfs_fonts.js')}}"></script>

    <script src="{{ asset('assets/js/core/select2.min.js') }}"></script>

    {{-- <script
        src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/date-1.4.1/fc-4.2.2/fh-3.3.2/r-2.4.1/sc-2.1.1/sb-1.4.2/datatables.min.js">
    </script> --}}
    {{-- New Cdn above --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- css --}}

    {{-- <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css') }}?v=3.1.0" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/material-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/material-dashboard.css.map') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/css/material-dashboard.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet">
    {{-- css --}}


    <link href="{{ asset('assets/css/core/family.Material.Icons.css') }}" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/family.Roboto.css') }}" />


    <script src="{{ asset('assets/js/core/42d5adcbca.js') }}" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/family.Material.Icons.Round.css') }}" />

    {{-- <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script> --}}


    <!-- Scripts -->
    <link href="{{ asset('assets/css/core/select2.css') }}" rel="stylesheet" />

    <script src="{{ asset('assets/js/core/select2.min.js') }}"></script>



    {{-- editable css --}}
    <link href="{{ asset('assets/css/custome.css') }}" rel="stylesheet">
    {{-- editable css --}}

    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>


</head>

<body class="g-sidenav-show  bg-gray-200">


    <main class="py-4">


        <aside
            class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
            id="sidenav-main">
            <div class="sidenav-header">
                <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                    aria-hidden="true" id="iconSidenav"></i>
                <a class="navbar-brand m-0">
                    {{-- <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> --}}
                    <span class="ms-1 font-weight-bold text-white">{{ \Auth::user()->name }}</span>
                </a>
            </div>
            <hr class="horizontal light mt-0 mb-2">
            <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('mess/dashboard') ? 'active bg-gradient-primary' : '' }}"
                            href="{{ url('/mess/dashboard') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">dashboard</i>
                            </div>
                            <span class="nav-link-text ms-1">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('mess/student') || request()->is('mess/student/*') ? 'active bg-gradient-primary' : '' }}"
                            href="{{ route('student.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">portrait</i>
                            </div>
                            <span class="nav-link-text ms-1">Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('mess/attendance') || request()->is('mess/attendance/*') ? 'active bg-gradient-primary' : '' }}"
                            href="{{ route('attendance.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">receipt_long</i>
                            </div>
                            <span class="nav-link-text ms-1">Attendance</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('mess/menu_master') || request()->is('mess/menu_master/*') ? 'active bg-gradient-primary' : '' }}"
                            href="{{ route('menu_master.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <span class="nav-link-text ms-1">Menus Master</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('mess/prebooking') || request()->is('mess/prebooking/*') ? 'active bg-gradient-primary' : '' }}"
                            href="{{ route('prebooking.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">book</i>
                            </div>
                            <span class="nav-link-text ms-1">Prebooking</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('mess/missleanious') || request()->is('mess/missleanious/*') ? 'active bg-gradient-primary' : '' }}"
                            href="{{ route('missleanious.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <span class="nav-link-text ms-1">Miscellaneous</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('mess/expenses') || request()->is('mess/expenses/*') ? 'active bg-gradient-primary' : '' }}"
                            href="{{ route('expenses.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <span class="nav-link-text ms-1">Expenses</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('mess/complementary_meal') || request()->is('mess/complementary_meal/*') ? 'active bg-gradient-primary' : '' }}"
                            href="{{ route('complementary_meal.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <span class="nav-link-text ms-1">Complementary Meal</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('mess/complementary_attendance') || request()->is('mess/complementary_attendance/*') ? 'active bg-gradient-primary' : '' }}"
                            href="{{ route('complementary_attendance.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <span class="nav-link-text ms-1">Complementary Marking</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('mess/leaves') || request()->is('mess/leaves/*') ? 'active bg-gradient-primary' : '' }}" href="{{ route('leaves.index') }}">
                            <div
                                class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <span class="nav-link-text ms-1">Leaves</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('mess/weekly_menu') || request()->is('mess/weekly_menu/*') ? 'active bg-gradient-primary' : '' }}"
                            href="{{ route('weekly_menu.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">list</i>
                            </div>
                            <span class="nav-link-text ms-1">Weekly-Menu</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('mess/deductions') || request()->is('mess/deductions/*') ? 'active bg-gradient-primary' : '' }}"
                            href="{{ route('deductions.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <span class="nav-link-text ms-1">Deductions</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('mess/transactions') || request()->is('mess/transactions/*') ? 'active bg-gradient-primary' : '' }}"
                            href="{{ route('transactions.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <span class="nav-link-text ms-1">Recharge History</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('mess/messsettlement') || request()->is('mess/messsettlement/*') ? 'active bg-gradient-primary' : '' }}"
                            href="{{ route('messsettlement.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">account_balance_wallet</i>
                            </div>
                            <span class="nav-link-text ms-1">Settlements</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="{{ route('all_logout') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">info_outline</i>
                            </div>
                            <span class="nav-link-text ms-1">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>

        </aside>
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
                data-scroll="true">
                <div class="container-fluid py-1 px-3">

                    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                        </div>
                        <ul class="navbar-nav  justify-content-end">
                            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                    </div>
                                </a>
                            </li>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    {{-- <a class="nav-link" href="{{ route('all_logout') }}">Logout</a> --}}
                                </li>
                            @endguest

                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')
        </main>
    </main>



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
    <script async defer src="{{ asset('assets/js/core/buttons.js') }}"></script>

    <script src="{{ asset('assets/js/core/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/material-dashboard.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>


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

    {{-- Datatable --}}
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                dom: 'Bfrtip',

                scrollCollapse: true,
                fixedColumns: {
                    left: 1,
                    right: 1
                },
                lengthMenu: [
                    [10, 25, 50, -1],
                    [10, 25, 50, 'All'],
                ],

            });
        });
    </script>

</body>

</html>
