<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' =>
  array (
    0 => false,
    1 =>
    array (
      '/sanctum/csrf-cookie' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::q5wWu1vmGKGGf8gD',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::R9d0rkdXJHY62fZI',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'generated::3Q03m1Fwtkm5Zlyl',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'generated::MnvGcVUfgYOxKAOQ',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'generated::zySWENl5Ko65xmM3',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user_check' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'user_check',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'admin.login-view',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/register' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'admin.register-view',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'admin.register',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'mess.login-view',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'mess.login',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/register' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'mess.register-view',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'mess.register',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::CAmbNbAfDb5BM5eo',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/dashboard' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::eskwraSQVJzZYpLQ',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/student' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'student.index',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'student.store',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/student/create' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'student.create',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/attendance' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'attendance.index',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'attendance.store',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/attendance/create' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'attendance.create',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/menu_master' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'menu_master.index',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'menu_master.store',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/menu_master/create' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'menu_master.create',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/prebooking' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'prebooking.index',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'prebooking.store',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/prebooking/create' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'prebooking.create',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/weekly_menu' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'weekly_menu.index',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'weekly_menu.store',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/weekly_menu/create' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'weekly_menu.create',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/deductions' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'deductions.index',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'deductions.store',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/deductions/create' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'deductions.create',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/transactions' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'transactions.index',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'transactions.store',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/transactions/create' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'transactions.create',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/attendance_all' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'attendance_all',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/settlement' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'messsettlement.index',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mess/settlement/request' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'messsettlement.request',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/mess' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'mess.index',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'mess.store',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/mess/create' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'mess.create',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/get_all_transction' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::RNd22MHJmy4nZRmA',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/get_all_users' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::zLXX0LXtaBf0oVP2',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/plan' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::EC7sQeu8ulwmt4y3',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::LWUUI5qK5izFHv66',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment_sucess' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::PXxAdkvkWdebmDc9',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/check_status' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::yoTWWIvNhouQTBrr',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout/logout' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'all_logout',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about_us' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'about_us',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/e_canteen' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'e_canteen',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/how_to_use' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'how_to_use',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/benifits' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'benifits',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/how_to_register' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'how_to_register',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/change-password' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'changePassword',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'postChangePassword',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forget-password' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::ObhQw0zgMbLgEvOt',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sendotp' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'sendotp',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verifyotp' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'verifyotp',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/routeclear' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::MQBlDdF7jAm2xfLQ',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/booking' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'booking.index',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'booking.store',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/booking/create' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'booking.create',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getBookingmenudata' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'getBookingmenudata',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cancelbooking' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'cancelbooking',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 =>
    array (
      0 => '{^(?|/password(?|hash/([^/]++)(*:32)|/reset/([^/]++)(*:54))|/mess/(?|s(?|tudent/([^/]++)(?|(*:93)|/edit(*:105)|(*:113))|ettlement/pay/([^/]++)(*:144))|attendance/([^/]++)(?|(*:175)|/edit(*:188)|(*:196))|menu_master/([^/]++)(?|(*:228)|/edit(*:241)|(*:249))|prebooking/([^/]++)(?|(*:280)|/edit(*:293)|(*:301))|weekly_menu/([^/]++)(?|(*:333)|/edit(*:346)|(*:354))|deductions/([^/]++)(?|(*:385)|/edit(*:398)|(*:406))|transactions/([^/]++)(?|(*:439)|/edit(*:452)|(*:460)))|/admin/mess/([^/]++)(?|(*:493)|/edit(*:506)|(*:514))|/booking/([^/]++)(?|(*:543)|/edit(*:556)|(*:564)))/?$}sDu',
    ),
    3 =>
    array (
      32 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::ByY4QnLMsorYubkz',
          ),
          1 =>
          array (
            0 => 'value',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      54 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'password.reset',
          ),
          1 =>
          array (
            0 => 'token',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      93 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'student.show',
          ),
          1 =>
          array (
            0 => 'student',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      105 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'student.edit',
          ),
          1 =>
          array (
            0 => 'student',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      113 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'student.update',
          ),
          1 =>
          array (
            0 => 'student',
          ),
          2 =>
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'student.destroy',
          ),
          1 =>
          array (
            0 => 'student',
          ),
          2 =>
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      144 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'messsettlement.pay',
          ),
          1 =>
          array (
            0 => 'id',
          ),
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      175 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'attendance.show',
          ),
          1 =>
          array (
            0 => 'attendance',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      188 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'attendance.edit',
          ),
          1 =>
          array (
            0 => 'attendance',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      196 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'attendance.update',
          ),
          1 =>
          array (
            0 => 'attendance',
          ),
          2 =>
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'attendance.destroy',
          ),
          1 =>
          array (
            0 => 'attendance',
          ),
          2 =>
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      228 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'menu_master.show',
          ),
          1 =>
          array (
            0 => 'menu_master',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      241 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'menu_master.edit',
          ),
          1 =>
          array (
            0 => 'menu_master',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      249 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'menu_master.update',
          ),
          1 =>
          array (
            0 => 'menu_master',
          ),
          2 =>
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'menu_master.destroy',
          ),
          1 =>
          array (
            0 => 'menu_master',
          ),
          2 =>
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      280 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'prebooking.show',
          ),
          1 =>
          array (
            0 => 'prebooking',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      293 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'prebooking.edit',
          ),
          1 =>
          array (
            0 => 'prebooking',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      301 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'prebooking.update',
          ),
          1 =>
          array (
            0 => 'prebooking',
          ),
          2 =>
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'prebooking.destroy',
          ),
          1 =>
          array (
            0 => 'prebooking',
          ),
          2 =>
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      333 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'weekly_menu.show',
          ),
          1 =>
          array (
            0 => 'weekly_menu',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      346 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'weekly_menu.edit',
          ),
          1 =>
          array (
            0 => 'weekly_menu',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      354 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'weekly_menu.update',
          ),
          1 =>
          array (
            0 => 'weekly_menu',
          ),
          2 =>
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'weekly_menu.destroy',
          ),
          1 =>
          array (
            0 => 'weekly_menu',
          ),
          2 =>
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      385 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'deductions.show',
          ),
          1 =>
          array (
            0 => 'deduction',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      398 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'deductions.edit',
          ),
          1 =>
          array (
            0 => 'deduction',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      406 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'deductions.update',
          ),
          1 =>
          array (
            0 => 'deduction',
          ),
          2 =>
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'deductions.destroy',
          ),
          1 =>
          array (
            0 => 'deduction',
          ),
          2 =>
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      439 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'transactions.show',
          ),
          1 =>
          array (
            0 => 'transaction',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      452 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'transactions.edit',
          ),
          1 =>
          array (
            0 => 'transaction',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      460 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'transactions.update',
          ),
          1 =>
          array (
            0 => 'transaction',
          ),
          2 =>
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'transactions.destroy',
          ),
          1 =>
          array (
            0 => 'transaction',
          ),
          2 =>
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      493 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'mess.show',
          ),
          1 =>
          array (
            0 => 'mess',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      506 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'mess.edit',
          ),
          1 =>
          array (
            0 => 'mess',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      514 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'mess.update',
          ),
          1 =>
          array (
            0 => 'mess',
          ),
          2 =>
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'mess.destroy',
          ),
          1 =>
          array (
            0 => 'mess',
          ),
          2 =>
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      543 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'booking.show',
          ),
          1 =>
          array (
            0 => 'booking',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      556 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'booking.edit',
          ),
          1 =>
          array (
            0 => 'booking',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      564 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'booking.update',
          ),
          1 =>
          array (
            0 => 'booking',
          ),
          2 =>
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'booking.destroy',
          ),
          1 =>
          array (
            0 => 'booking',
          ),
          2 =>
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 =>
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' =>
  array (
    'sanctum.csrf-cookie' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' =>
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' =>
        array (
        ),
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q5wWu1vmGKGGf8gD' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005550000000000000000";}";s:4:"hash";s:44:"xMzAVTsTMXWzUU3524KmM9d4ZzsBCbzkF7x3q+M5XvM=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' =>
        array (
        ),
        'as' => 'generated::q5wWu1vmGKGGf8gD',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R9d0rkdXJHY62fZI' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:262:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005570000000000000000";}";s:4:"hash";s:44:"xgykUXpuREEj8jxxvh5iIW0tM10SE5KdRzhL5h1JqVA=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::R9d0rkdXJHY62fZI',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ByY4QnLMsorYubkz' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'passwordhash/{value}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:271:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:53:"function ($value) {
    return \\Hash::make($value);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005590000000000000000";}";s:4:"hash";s:44:"gQoQqTAaT4swL0AUBJkBcU5yzbTrz2ntYTtyH2/R/U0=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::ByY4QnLMsorYubkz',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3Q03m1Fwtkm5Zlyl' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::3Q03m1Fwtkm5Zlyl',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MnvGcVUfgYOxKAOQ' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::MnvGcVUfgYOxKAOQ',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zySWENl5Ko65xmM3' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::zySWENl5Ko65xmM3',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user_check' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'user_check',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@user_check',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@user_check',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'user_check',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login-view' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showAdminLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showAdminLoginForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'admin.login-view',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'admin',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@adminLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@adminLogin',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'admin.login',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.register-view' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/register',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showAdminRegisterForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showAdminRegisterForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'admin.register-view',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.register' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/register',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@createAdmin',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@createAdmin',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'admin.register',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mess.login-view' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showMessLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showMessLoginForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'mess.login-view',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mess.login' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'mess',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@messLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@messLogin',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'mess.login',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mess.register-view' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/register',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showMessRegisterForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showMessRegisterForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'mess.register-view',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mess.register' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'mess/register',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@createMess',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@createMess',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'mess.register',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'home',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CAmbNbAfDb5BM5eo' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:268:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:50:"function(){
    return \\view(\'admin.dashboard\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005700000000000000000";}";s:4:"hash";s:44:"O6Ma9HnPnyy6WyFM+iOb0jv9GLd0I/wYGmoGSzrLwSU=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::CAmbNbAfDb5BM5eo',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eskwraSQVJzZYpLQ' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/dashboard',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::eskwraSQVJzZYpLQ',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student.index' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/student',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'student.index',
        'uses' => 'App\\Http\\Controllers\\StudentController@index',
        'controller' => 'App\\Http\\Controllers\\StudentController@index',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student.create' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/student/create',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'student.create',
        'uses' => 'App\\Http\\Controllers\\StudentController@create',
        'controller' => 'App\\Http\\Controllers\\StudentController@create',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student.store' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'mess/student',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'student.store',
        'uses' => 'App\\Http\\Controllers\\StudentController@store',
        'controller' => 'App\\Http\\Controllers\\StudentController@store',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student.show' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/student/{student}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'student.show',
        'uses' => 'App\\Http\\Controllers\\StudentController@show',
        'controller' => 'App\\Http\\Controllers\\StudentController@show',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student.edit' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/student/{student}/edit',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'student.edit',
        'uses' => 'App\\Http\\Controllers\\StudentController@edit',
        'controller' => 'App\\Http\\Controllers\\StudentController@edit',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student.update' =>
    array (
      'methods' =>
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'mess/student/{student}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'student.update',
        'uses' => 'App\\Http\\Controllers\\StudentController@update',
        'controller' => 'App\\Http\\Controllers\\StudentController@update',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student.destroy' =>
    array (
      'methods' =>
      array (
        0 => 'DELETE',
      ),
      'uri' => 'mess/student/{student}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'student.destroy',
        'uses' => 'App\\Http\\Controllers\\StudentController@destroy',
        'controller' => 'App\\Http\\Controllers\\StudentController@destroy',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendance.index' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/attendance',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'attendance.index',
        'uses' => 'App\\Http\\Controllers\\AttendanceController@index',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@index',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendance.create' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/attendance/create',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'attendance.create',
        'uses' => 'App\\Http\\Controllers\\AttendanceController@create',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@create',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendance.store' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'mess/attendance',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'attendance.store',
        'uses' => 'App\\Http\\Controllers\\AttendanceController@store',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@store',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendance.show' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/attendance/{attendance}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'attendance.show',
        'uses' => 'App\\Http\\Controllers\\AttendanceController@show',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@show',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendance.edit' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/attendance/{attendance}/edit',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'attendance.edit',
        'uses' => 'App\\Http\\Controllers\\AttendanceController@edit',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@edit',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendance.update' =>
    array (
      'methods' =>
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'mess/attendance/{attendance}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'attendance.update',
        'uses' => 'App\\Http\\Controllers\\AttendanceController@update',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@update',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendance.destroy' =>
    array (
      'methods' =>
      array (
        0 => 'DELETE',
      ),
      'uri' => 'mess/attendance/{attendance}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'attendance.destroy',
        'uses' => 'App\\Http\\Controllers\\AttendanceController@destroy',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@destroy',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu_master.index' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/menu_master',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'menu_master.index',
        'uses' => 'App\\Http\\Controllers\\MenuMasterController@index',
        'controller' => 'App\\Http\\Controllers\\MenuMasterController@index',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu_master.create' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/menu_master/create',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'menu_master.create',
        'uses' => 'App\\Http\\Controllers\\MenuMasterController@create',
        'controller' => 'App\\Http\\Controllers\\MenuMasterController@create',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu_master.store' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'mess/menu_master',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'menu_master.store',
        'uses' => 'App\\Http\\Controllers\\MenuMasterController@store',
        'controller' => 'App\\Http\\Controllers\\MenuMasterController@store',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu_master.show' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/menu_master/{menu_master}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'menu_master.show',
        'uses' => 'App\\Http\\Controllers\\MenuMasterController@show',
        'controller' => 'App\\Http\\Controllers\\MenuMasterController@show',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu_master.edit' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/menu_master/{menu_master}/edit',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'menu_master.edit',
        'uses' => 'App\\Http\\Controllers\\MenuMasterController@edit',
        'controller' => 'App\\Http\\Controllers\\MenuMasterController@edit',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu_master.update' =>
    array (
      'methods' =>
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'mess/menu_master/{menu_master}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'menu_master.update',
        'uses' => 'App\\Http\\Controllers\\MenuMasterController@update',
        'controller' => 'App\\Http\\Controllers\\MenuMasterController@update',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu_master.destroy' =>
    array (
      'methods' =>
      array (
        0 => 'DELETE',
      ),
      'uri' => 'mess/menu_master/{menu_master}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'menu_master.destroy',
        'uses' => 'App\\Http\\Controllers\\MenuMasterController@destroy',
        'controller' => 'App\\Http\\Controllers\\MenuMasterController@destroy',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'prebooking.index' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/prebooking',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'prebooking.index',
        'uses' => 'App\\Http\\Controllers\\PreBookingController@index',
        'controller' => 'App\\Http\\Controllers\\PreBookingController@index',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'prebooking.create' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/prebooking/create',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'prebooking.create',
        'uses' => 'App\\Http\\Controllers\\PreBookingController@create',
        'controller' => 'App\\Http\\Controllers\\PreBookingController@create',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'prebooking.store' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'mess/prebooking',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'prebooking.store',
        'uses' => 'App\\Http\\Controllers\\PreBookingController@store',
        'controller' => 'App\\Http\\Controllers\\PreBookingController@store',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'prebooking.show' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/prebooking/{prebooking}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'prebooking.show',
        'uses' => 'App\\Http\\Controllers\\PreBookingController@show',
        'controller' => 'App\\Http\\Controllers\\PreBookingController@show',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'prebooking.edit' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/prebooking/{prebooking}/edit',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'prebooking.edit',
        'uses' => 'App\\Http\\Controllers\\PreBookingController@edit',
        'controller' => 'App\\Http\\Controllers\\PreBookingController@edit',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'prebooking.update' =>
    array (
      'methods' =>
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'mess/prebooking/{prebooking}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'prebooking.update',
        'uses' => 'App\\Http\\Controllers\\PreBookingController@update',
        'controller' => 'App\\Http\\Controllers\\PreBookingController@update',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'prebooking.destroy' =>
    array (
      'methods' =>
      array (
        0 => 'DELETE',
      ),
      'uri' => 'mess/prebooking/{prebooking}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'prebooking.destroy',
        'uses' => 'App\\Http\\Controllers\\PreBookingController@destroy',
        'controller' => 'App\\Http\\Controllers\\PreBookingController@destroy',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'weekly_menu.index' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/weekly_menu',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'weekly_menu.index',
        'uses' => 'App\\Http\\Controllers\\WeeklyMenuController@index',
        'controller' => 'App\\Http\\Controllers\\WeeklyMenuController@index',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'weekly_menu.create' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/weekly_menu/create',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'weekly_menu.create',
        'uses' => 'App\\Http\\Controllers\\WeeklyMenuController@create',
        'controller' => 'App\\Http\\Controllers\\WeeklyMenuController@create',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'weekly_menu.store' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'mess/weekly_menu',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'weekly_menu.store',
        'uses' => 'App\\Http\\Controllers\\WeeklyMenuController@store',
        'controller' => 'App\\Http\\Controllers\\WeeklyMenuController@store',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'weekly_menu.show' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/weekly_menu/{weekly_menu}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'weekly_menu.show',
        'uses' => 'App\\Http\\Controllers\\WeeklyMenuController@show',
        'controller' => 'App\\Http\\Controllers\\WeeklyMenuController@show',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'weekly_menu.edit' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/weekly_menu/{weekly_menu}/edit',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'weekly_menu.edit',
        'uses' => 'App\\Http\\Controllers\\WeeklyMenuController@edit',
        'controller' => 'App\\Http\\Controllers\\WeeklyMenuController@edit',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'weekly_menu.update' =>
    array (
      'methods' =>
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'mess/weekly_menu/{weekly_menu}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'weekly_menu.update',
        'uses' => 'App\\Http\\Controllers\\WeeklyMenuController@update',
        'controller' => 'App\\Http\\Controllers\\WeeklyMenuController@update',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'weekly_menu.destroy' =>
    array (
      'methods' =>
      array (
        0 => 'DELETE',
      ),
      'uri' => 'mess/weekly_menu/{weekly_menu}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'weekly_menu.destroy',
        'uses' => 'App\\Http\\Controllers\\WeeklyMenuController@destroy',
        'controller' => 'App\\Http\\Controllers\\WeeklyMenuController@destroy',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deductions.index' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/deductions',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'deductions.index',
        'uses' => 'App\\Http\\Controllers\\DeductionController@index',
        'controller' => 'App\\Http\\Controllers\\DeductionController@index',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deductions.create' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/deductions/create',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'deductions.create',
        'uses' => 'App\\Http\\Controllers\\DeductionController@create',
        'controller' => 'App\\Http\\Controllers\\DeductionController@create',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deductions.store' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'mess/deductions',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'deductions.store',
        'uses' => 'App\\Http\\Controllers\\DeductionController@store',
        'controller' => 'App\\Http\\Controllers\\DeductionController@store',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deductions.show' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/deductions/{deduction}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'deductions.show',
        'uses' => 'App\\Http\\Controllers\\DeductionController@show',
        'controller' => 'App\\Http\\Controllers\\DeductionController@show',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deductions.edit' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/deductions/{deduction}/edit',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'deductions.edit',
        'uses' => 'App\\Http\\Controllers\\DeductionController@edit',
        'controller' => 'App\\Http\\Controllers\\DeductionController@edit',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deductions.update' =>
    array (
      'methods' =>
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'mess/deductions/{deduction}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'deductions.update',
        'uses' => 'App\\Http\\Controllers\\DeductionController@update',
        'controller' => 'App\\Http\\Controllers\\DeductionController@update',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deductions.destroy' =>
    array (
      'methods' =>
      array (
        0 => 'DELETE',
      ),
      'uri' => 'mess/deductions/{deduction}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'deductions.destroy',
        'uses' => 'App\\Http\\Controllers\\DeductionController@destroy',
        'controller' => 'App\\Http\\Controllers\\DeductionController@destroy',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transactions.index' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/transactions',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'transactions.index',
        'uses' => 'App\\Http\\Controllers\\TransactionController@index',
        'controller' => 'App\\Http\\Controllers\\TransactionController@index',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transactions.create' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/transactions/create',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'transactions.create',
        'uses' => 'App\\Http\\Controllers\\TransactionController@create',
        'controller' => 'App\\Http\\Controllers\\TransactionController@create',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transactions.store' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'mess/transactions',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'transactions.store',
        'uses' => 'App\\Http\\Controllers\\TransactionController@store',
        'controller' => 'App\\Http\\Controllers\\TransactionController@store',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transactions.show' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/transactions/{transaction}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'transactions.show',
        'uses' => 'App\\Http\\Controllers\\TransactionController@show',
        'controller' => 'App\\Http\\Controllers\\TransactionController@show',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transactions.edit' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/transactions/{transaction}/edit',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'transactions.edit',
        'uses' => 'App\\Http\\Controllers\\TransactionController@edit',
        'controller' => 'App\\Http\\Controllers\\TransactionController@edit',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transactions.update' =>
    array (
      'methods' =>
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'mess/transactions/{transaction}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'transactions.update',
        'uses' => 'App\\Http\\Controllers\\TransactionController@update',
        'controller' => 'App\\Http\\Controllers\\TransactionController@update',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transactions.destroy' =>
    array (
      'methods' =>
      array (
        0 => 'DELETE',
      ),
      'uri' => 'mess/transactions/{transaction}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'as' => 'transactions.destroy',
        'uses' => 'App\\Http\\Controllers\\TransactionController@destroy',
        'controller' => 'App\\Http\\Controllers\\TransactionController@destroy',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendance_all' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/attendance_all',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'uses' => 'App\\Http\\Controllers\\AttendanceController@all',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@all',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
        'as' => 'attendance_all',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'messsettlement.index' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mess/settlement',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'uses' => 'App\\Http\\Controllers\\SettlementController@index',
        'controller' => 'App\\Http\\Controllers\\SettlementController@index',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
        'as' => 'messsettlement.index',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'messsettlement.request' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'mess/settlement/request',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'uses' => 'App\\Http\\Controllers\\SettlementController@requested',
        'controller' => 'App\\Http\\Controllers\\SettlementController@requested',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
        'as' => 'messsettlement.request',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'messsettlement.pay' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'mess/settlement/pay/{id}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:mess',
        ),
        'uses' => 'App\\Http\\Controllers\\SettlementController@pay',
        'controller' => 'App\\Http\\Controllers\\SettlementController@pay',
        'namespace' => NULL,
        'prefix' => '/mess',
        'where' =>
        array (
        ),
        'as' => 'messsettlement.pay',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mess.index' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mess',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'as' => 'mess.index',
        'uses' => 'App\\Http\\Controllers\\MessController@index',
        'controller' => 'App\\Http\\Controllers\\MessController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mess.create' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mess/create',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'as' => 'mess.create',
        'uses' => 'App\\Http\\Controllers\\MessController@create',
        'controller' => 'App\\Http\\Controllers\\MessController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mess.store' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/mess',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'as' => 'mess.store',
        'uses' => 'App\\Http\\Controllers\\MessController@store',
        'controller' => 'App\\Http\\Controllers\\MessController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mess.show' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mess/{mess}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'as' => 'mess.show',
        'uses' => 'App\\Http\\Controllers\\MessController@show',
        'controller' => 'App\\Http\\Controllers\\MessController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mess.edit' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mess/{mess}/edit',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'as' => 'mess.edit',
        'uses' => 'App\\Http\\Controllers\\MessController@edit',
        'controller' => 'App\\Http\\Controllers\\MessController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mess.update' =>
    array (
      'methods' =>
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/mess/{mess}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'as' => 'mess.update',
        'uses' => 'App\\Http\\Controllers\\MessController@update',
        'controller' => 'App\\Http\\Controllers\\MessController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mess.destroy' =>
    array (
      'methods' =>
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/mess/{mess}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'as' => 'mess.destroy',
        'uses' => 'App\\Http\\Controllers\\MessController@destroy',
        'controller' => 'App\\Http\\Controllers\\MessController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RNd22MHJmy4nZRmA' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/get_all_transction',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@get_all_transction',
        'controller' => 'App\\Http\\Controllers\\AdminController@get_all_transction',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' =>
        array (
        ),
        'as' => 'generated::RNd22MHJmy4nZRmA',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zLXX0LXtaBf0oVP2' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/get_all_users',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@get_all_users',
        'controller' => 'App\\Http\\Controllers\\AdminController@get_all_users',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' =>
        array (
        ),
        'as' => 'generated::zLXX0LXtaBf0oVP2',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EC7sQeu8ulwmt4y3' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'plan',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PhonePeController@plan',
        'controller' => 'App\\Http\\Controllers\\PhonePeController@plan',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::EC7sQeu8ulwmt4y3',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LWUUI5qK5izFHv66' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'payment',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PhonePeController@initiate',
        'controller' => 'App\\Http\\Controllers\\PhonePeController@initiate',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::LWUUI5qK5izFHv66',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PXxAdkvkWdebmDc9' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'payment_sucess',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PhonePeController@payment_sucess',
        'controller' => 'App\\Http\\Controllers\\PhonePeController@payment_sucess',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::PXxAdkvkWdebmDc9',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yoTWWIvNhouQTBrr' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'check_status',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PhonePeController@check_status',
        'controller' => 'App\\Http\\Controllers\\PhonePeController@check_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::yoTWWIvNhouQTBrr',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'all_logout' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'logout/logout',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'all_logout',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about_us' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about_us',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:265:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:47:"function(){
    return \\view(\'web.about_us\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009590000000000000000";}";s:4:"hash";s:44:"sTTy95bpYZeMrcfaq2HDK7iBwZKC5tRNCpRHLt4TV1Y=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'about_us',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'e_canteen' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'e_canteen',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:266:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:48:"function(){
    return \\view(\'web.e_canteen\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000095b0000000000000000";}";s:4:"hash";s:44:"7gNjL4yXUeMmRkBprbEaLGj9ScPyaY7H/ksXwN25dAg=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'e_canteen',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'how_to_use' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'how_to_use',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:266:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:48:"function(){
    return \\view(\'web.howto_use\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000095d0000000000000000";}";s:4:"hash";s:44:"AtUxATXrQcuA0hdPbqm/lB0LGzO6cMV9u+CA+7aXS7U=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'how_to_use',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'benifits' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'benifits',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:265:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:47:"function(){
    return \\view(\'web.benifits\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000095f0000000000000000";}";s:4:"hash";s:44:"Kw5ScQNAeTqL3PWjEQKYTtHNHqHwphpLckOFqH2n7X4=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'benifits',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'how_to_register' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'how_to_register',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:272:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:54:"function(){
    return \\view(\'web.how_to_register\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009610000000000000000";}";s:4:"hash";s:44:"HDYwVoCOxRtVxhJMZerQL9YYmFAxMmb5r5/ICMjqApE=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'how_to_register',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'changePassword' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'change-password',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StudentController@changePassword',
        'controller' => 'App\\Http\\Controllers\\StudentController@changePassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'changePassword',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'postChangePassword' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'change-password',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StudentController@changePasswordSave',
        'controller' => 'App\\Http\\Controllers\\StudentController@changePasswordSave',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'postChangePassword',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ObhQw0zgMbLgEvOt' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forget-password',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ForgetController@forget_password',
        'controller' => 'App\\Http\\Controllers\\ForgetController@forget_password',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::ObhQw0zgMbLgEvOt',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sendotp' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'sendotp',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ForgetController@sendotp',
        'controller' => 'App\\Http\\Controllers\\ForgetController@sendotp',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'sendotp',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verifyotp' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'verifyotp',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ForgetController@verifyotp',
        'controller' => 'App\\Http\\Controllers\\ForgetController@verifyotp',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'verifyotp',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MQBlDdF7jAm2xfLQ' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'routeclear',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:390:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:171:"function (){
    \\Artisan::call("route:clear");
    \\Artisan::call(\'config:cache\');
    \\Artisan::call(\'cache:clear\');
    \\Artisan::call(\'view:clear\');
    \\dd("done");
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009680000000000000000";}";s:4:"hash";s:44:"rzyZ964hjVUSL3TEjO2iIhdLtVK5NNwuZ7tpAjmC1I8=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::MQBlDdF7jAm2xfLQ',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'booking.index' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'booking',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'booking.index',
        'uses' => 'App\\Http\\Controllers\\BookingController@index',
        'controller' => 'App\\Http\\Controllers\\BookingController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'booking.create' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'booking/create',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'booking.create',
        'uses' => 'App\\Http\\Controllers\\BookingController@create',
        'controller' => 'App\\Http\\Controllers\\BookingController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'booking.store' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'booking',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'booking.store',
        'uses' => 'App\\Http\\Controllers\\BookingController@store',
        'controller' => 'App\\Http\\Controllers\\BookingController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'booking.show' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'booking/{booking}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'booking.show',
        'uses' => 'App\\Http\\Controllers\\BookingController@show',
        'controller' => 'App\\Http\\Controllers\\BookingController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'booking.edit' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'booking/{booking}/edit',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'booking.edit',
        'uses' => 'App\\Http\\Controllers\\BookingController@edit',
        'controller' => 'App\\Http\\Controllers\\BookingController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'booking.update' =>
    array (
      'methods' =>
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'booking/{booking}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'booking.update',
        'uses' => 'App\\Http\\Controllers\\BookingController@update',
        'controller' => 'App\\Http\\Controllers\\BookingController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'booking.destroy' =>
    array (
      'methods' =>
      array (
        0 => 'DELETE',
      ),
      'uri' => 'booking/{booking}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'booking.destroy',
        'uses' => 'App\\Http\\Controllers\\BookingController@destroy',
        'controller' => 'App\\Http\\Controllers\\BookingController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getBookingmenudata' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'getBookingmenudata',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BookingController@getBookingmenudata',
        'controller' => 'App\\Http\\Controllers\\BookingController@getBookingmenudata',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'getBookingmenudata',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cancelbooking' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'cancelbooking',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BookingController@cancelbooking',
        'controller' => 'App\\Http\\Controllers\\BookingController@cancelbooking',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'cancelbooking',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
