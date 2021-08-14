<!DOCTYPE html>
<html>
<html lang="{{session('locale')}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('public/assets/images/favicon.ico')}}">
    <title>White Tiger Safari | SuperAdmin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <!-- Toggle Switch -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/assets/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- MyStyle -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/mystyle.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('/') }}" target="_blank" class="nav-link">Home</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fas fa-sign-out-alt"></i>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('superadmin.dashboard')}}" class="brand-link">
            <img src="{{ asset('public/assets/images/mukundpur-logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
            <span class="brand-text font-weight-light">White Tiger Safari</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                    <li class="nav-header">ADMIN'S LIST</li>
                    <li class="nav-item has-treeview menu-open">
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('superadmin/dashboard') }}" class="nav-link {{ 'superadmin/dashboard' == request()->path() ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-users-cog"></i>
                                    <p>Admin Details</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">SUPER ADMIN SYSTEM</li>
                    <li class="nav-item {{ ('superadmin/profile' == request()->path() || 'superadmin/changePassword' == request()->path()) ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-cog"></i>
                            <p>
                                Super Admin Settings
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('superadmin/profile')}}" class="nav-link {{ 'superadmin/profile' == request()->path() ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User Profile</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('superadmin/changePassword')}}" class="nav-link {{ 'superadmin/changePassword' == request()->path() ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Change Password</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <main class="">
                @yield('content')
        </main>
    </div>


    <!-- /.content-wrapper -->
    <footer class="main-footer">
        Copyright&nbsp;©&nbsp;{{date('Y')}}
        <strong><a href="{{route('superadmin.dashboard')}}">White Tiger Safari</a>.</strong>
        All Rights Reserved
    </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('public/assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('public/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('public/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('public/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<!-- Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('public/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('public/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/assets/dist/js/adminlte.js') }}"></script>
<!-- Toggle Switch -->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>
    // For Alerts
    $(document).ready(function(){
        //Alert
        setTimeout(function () {
            $('.alert').slideUp('slow');
        }, 4000);
    });

    $(function () {
        $('#myTable').DataTable({
            "responsive": false,
            "autoWidth": false,
        });
    });

    toastr.options = {
        "closeButton": true,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "100",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    // Toggle Switch
    $(function() {
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 0 : 1;
            var user_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'changeuserstatus',
                data: {'status': status, 'user_id': user_id},
                success: function(data){
                    if(status == 0)
                    {
                        toastr['success'](data.message);
                    }
                    else if(status == 1)
                    {
                        toastr['error'](data.message);
                    }
                    else
                    {
                        toastr['warning'](data.message);
                    }
                }
            });
            //Alert
            setTimeout(function () {
                $('.alert').slideUp('slow');
            }, 4000);
        });
    })
</script>

<!-- Ckeditor -->
<script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>

@if(session('success'))
    <script>toastr.success("{!! session('success') !!}")</script>
@endif

@if(session('error'))
    <script>toastr.error("{!! session('error') !!}")</script>
@endif

@stack('js')
</body>
</html>
