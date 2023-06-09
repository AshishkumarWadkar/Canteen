
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

            <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
                <div class="sidenav-header">
                  <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
                  <a class="navbar-brand m-0">
                    {{-- <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> --}}
                    <span class="ms-1 font-weight-bold text-white">{{ \Auth::user()->name }}</span>
                  </a>
                </div>
                <hr class="horizontal light mt-0 mb-2">
                <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('admin/dashboard') ? 'active bg-gradient-primary' : '' }}" href="{{url('admin/dashboard')}}">
                          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                          </div>
                          <span class="nav-link-text ms-1">Dashboard</span>
                        </a>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('admin/mess') || request()->is('admin/mess/*') ? 'active bg-gradient-primary' : '' }}" href="{{route('mess.index')}}">
                          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">local_dining</i>
                          </div>
                          <span class="nav-link-text ms-1">Mess</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('admin/get_subscription_list') || request()->is('admin/get_subscription/*') ? 'active bg-gradient-primary' : '' }}"
                            href="{{route('get_all_subscription')}}">
                          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">list</i>
                          </div>
                          <span class="nav-link-text ms-1">Subscription List</span>
                        </a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('mess/transactions') || request()->is('mess/transactions/*') ? 'active bg-gradient-primary' : '' }}"
                            href="{{ route('transactions.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <span class="nav-link-text ms-1">Recharge History</span>
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('admin/adminsettlement') || request()->is('admin/adminsettlement/*') ? 'active bg-gradient-primary' : '' }}"
                            href="{{ route('adminsettlement.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">account_balance_wallet</i>
                            </div>
                            <span class="nav-link-text ms-1">Settlements</span>
                        </a>
                    </li>


                    {{-- <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('admin/adminsettlement') || request()->is('admin/adminsettlement/*') ? 'active bg-gradient-primary' : '' }}" href="{{ route('adminsettlement.index') }}">
                            <div
                                class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <span class="nav-link-text ms-1">Settlements</span>
                        </a>
                    </li> --}}
                       {{-- <li class="nav-item">
                        <a class="nav-link text-white " href="{{route('all_logout')}}">
                          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">login</i>
                          </div>
                          <span class="nav-link-text ms-1">Sign Out</span>
                        </a>
                      </li> --}}
                    </ul>
                </div>

              </aside>
            <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
                <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
                    <div class="container-fluid py-1 px-3">

                      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                          <div class="input-group input-group-outline d-none">
                            <label class="form-label">Type here...</label>
                            <input type="text" class="form-control">
                          </div>
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
                          <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                              <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                          </li>
                          <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                              <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                  <div class="d-flex py-1">
                                    <div class="my-auto">
                                      <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                      <h6 class="text-sm font-weight-normal mb-1">
                                        <span class="font-weight-bold">New message</span> from Laur
                                      </h6>
                                      <p class="text-xs text-secondary mb-0">
                                        <i class="fa fa-clock me-1"></i>
                                        13 minutes ago
                                      </p>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                  <div class="d-flex py-1">
                                    <div class="my-auto">
                                      <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                      <h6 class="text-sm font-weight-normal mb-1">
                                        <span class="font-weight-bold">New album</span> by Travis Scott
                                      </h6>
                                      <p class="text-xs text-secondary mb-0">
                                        <i class="fa fa-clock me-1"></i>
                                        1 day
                                      </p>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                  <div class="d-flex py-1">
                                    <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                      <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>credit-card</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                            <g transform="translate(1716.000000, 291.000000)">
                                              <g transform="translate(453.000000, 454.000000)">
                                                <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                              </g>
                                            </g>
                                          </g>
                                        </g>
                                      </svg>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                      <h6 class="text-sm font-weight-normal mb-1">
                                        Payment successfully completed
                                      </h6>
                                      <p class="text-xs text-secondary mb-0">
                                        <i class="fa fa-clock me-1"></i>
                                        2 days
                                      </p>
                                    </div>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          {{-- <li class="nav-item d-flex align-items-center">
                            <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                              <i class="fa fa-user me-sm-1"></i>
                              <span class="d-sm-inline d-none">Sign In</span>
                            </a>
                          </li> --}}

                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('all_logout') }}">Logout</a>
                                </li>
                            @endguest

                        </ul>
                      </div>
                    </div>
                  </nav>

                @yield('admin-content')
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
