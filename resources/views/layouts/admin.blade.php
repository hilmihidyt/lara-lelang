<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Lelang | Dashboard</title>

    <!-- Tell the browser to be responsive to screen width -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Ionicons -->

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Tempusdominus Bbootstrap 4 -->

    <link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

    <!-- iCheck -->

    <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <!-- JQVMap -->

    <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css') }}">

    <!-- Theme style -->

    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">

    <!-- overlayScrollbars -->

    <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

    <!-- Daterange picker -->

    <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">

    <!-- summernote -->

    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">

    <!-- Google Font: Source Sans Pro -->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

      <!-- DataTables -->
  
      <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  
      <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

    @yield('style')

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

            </ul>  

        </nav>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Brand Logo -->

            <a href="index3.html" class="brand-link">

                {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
   
                <span class="brand-text font-weight-light">Lelang</span>
   
            </a>

            <!-- Sidebar -->

            <div class="sidebar">

                <!-- Sidebar user panel (optional) -->

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="info">

                        {{-- <a href="#" class="d-block">{{ Auth::guard('admin')->user()->name }}</a> --}}

                    </div>

                </div>

                <!-- Sidebar Menu -->

                <nav class="mt-2">

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <!-- Add icons to the links using the .nav-icon class

                            with font-awesome or any other icon font library -->

                            <li class="nav-item has-treeview menu-open">

                                <a href="{{ route('admin.dashboard') }}" class="nav-link active">

                                    <i class="nav-icon fas fa-tachometer-alt"></i>

                                    <p>

                                        Dashboard                
     
                                    </p>
     
                                </a>
     
                            </li>
     
                            <li class="nav-item has-treeview">
     
                                <a href="#" class="nav-link">
     
                                    <i class="nav-icon fas fa-tree"></i>
     
                                    <p>
     
                                        Data Ikan
     
                                        <i class="fas fa-angle-left right"></i>
     
                                    </p>
     
                                </a>
     
                                <ul class="nav nav-treeview">
     
                                    <li class="nav-item">
     
                                        <a href="{{ route('admin.ikan') }}" class="nav-link">
     
                                            <i class="far fa-circle nav-icon"></i>
     
                                            <p>Data</p>
     
                                        </a>
     
                                    </li>
     
                                    <li class="nav-item">
     
                                        <a href="{{ route('admin.ikan.trash') }}" class="nav-link">
     
                                            <i class="far fa-circle nav-icon"></i>
     
                                            <p>Trash</p>
     
                                        </a>
     
                                    </li>         
      
                                </ul>
      
                            </li>
      
                            <li class="nav-item has-treeview">
      
                                <a href="#" class="nav-link">
      
                                    <i class="nav-icon fas fa-edit"></i>
      
                                    <p>
      
                                        Data Nelayan
      
                                        <i class="fas fa-angle-left right"></i>
      
                                    </p>
      
                                </a>
      
                                <ul class="nav nav-treeview">
      
                                    <li class="nav-item">
      
                                        <a href="{{ route('admin.nelayan') }}" class="nav-link">
      
                                            <i class="far fa-circle nav-icon"></i>
      
                                            <p>Data</p>
      
                                        </a>
      
                                    </li>
      
                                    <li class="nav-item">
      
                                        <a href="{{ route('admin.nelayan.trash') }}" class="nav-link">
      
                                            <i class="far fa-circle nav-icon"></i>
      
                                            <p>Trash</p>
      
                                        </a>
      
                                    </li>
      
                                </ul>
      
                            </li>
      
                            <li class="nav-item has-treeview">
      
                                <a href="#" class="nav-link">
      
                                    <i class="nav-icon fas fa-table"></i>
      
                                    <p>
      
                                        Data Lelang
      
                                        <i class="fas fa-angle-left right"></i>
      
                                    </p>
      
                                </a>
      
                                <ul class="nav nav-treeview">
      
                                    <li class="nav-item">
      
                                        <a href="pages/tables/simple.html" class="nav-link">
      
                                            <i class="far fa-circle nav-icon"></i>
      
                                            <p>Data</p>
      
                                        </a>
      
                                    </li>
      
                                    <li class="nav-item">
      
                                        <a href="pages/tables/data.html" class="nav-link">
      
                                            <i class="far fa-circle nav-icon"></i>
      
                                            <p>Trash</p>
      
                                        </a>
      
                                    </li>
      
                                </ul>
      
                            </li>   

                            <li class="nav-item has-treeview">
      
                                <a href="#" class="nav-link">
      
                                    <i class="nav-icon far fa-envelope"></i>
      
                                    <p>
      
                                        Data staff
      
                                        <i class="fas fa-angle-left right"></i>
      
                                    </p>
      
                                </a>
      
                                <ul class="nav nav-treeview">
      
                                    <li class="nav-item">
      
                                        <a href="{{ route('admin.staff') }}" class="nav-link">
      
                                            <i class="far fa-circle nav-icon"></i>
      
                                            <p>Data</p>
      
                                        </a>
      
                                    </li>
      
                                    <li class="nav-item">
      
                                        <a href="{{ route('admin.staff.trash') }}" class="nav-link">
      
                                            <i class="far fa-circle nav-icon"></i>
      
                                            <p>Trash</p>
      
                                        </a>
      
                                    </li>
      
                                </ul>
      
                            </li>

                            <li class="nav-item has-treeview">
     
                                <a href="#" class="nav-link">
     
                                    <i class="nav-icon fas fa-chart-pie"></i>
     
                                    <p>
     
                                        Data Master
     
                                        <i class="right fas fa-angle-left"></i>
     
                                    </p>
     
                                </a>
     
                                <ul class="nav nav-treeview">
     
                                    <li class="nav-item">
     
                                        <a href="{{ route('admin.jenisikan') }}" class="nav-link">
     
                                            <i class="far fa-circle nav-icon"></i>
     
                                            <p>Jenis Ikan</p>
     
                                        </a>
     
                                    </li>
     
                                    <li class="nav-item">
     
                                        <a href="{{ route('admin.wilayah') }}" class="nav-link">
     
                                            <i class="far fa-circle nav-icon"></i>
     
                                            <p>Wilayah Penangkapan</p>
     
                                        </a>
     
                                    </li>
     
                                </ul>
     
                            </li>

                            <li class="nav-item has-treeview">
     
                                <a href="#" class="nav-link">
     
                                    <i class="nav-icon fas fa-chart-pie"></i>
     
                                    <p>
     
                                        Setting
     
                                        <i class="right fas fa-angle-left"></i>
     
                                    </p>
     
                                </a>
     
                                <ul class="nav nav-treeview">
     
                                    <li class="nav-item">
     
                                        <a href="{{ route('admin.banner') }}" class="nav-link">
     
                                            <i class="far fa-circle nav-icon"></i>
     
                                            <p>Banner Slider</p>
     
                                        </a>
     
                                    </li>
     
                                    <li class="nav-item">
     
                                        <a href="{{ route('admin.generalsetting') }}" class="nav-link">
     
                                            <i class="far fa-circle nav-icon"></i>
     
                                            <p>General</p>
     
                                        </a>
     
                                    </li>
     
                                </ul>
     
                            </li>
     
                            <br>
      
                            <li class="nav-item">
      
                                <a href="{{ route('admin.logout') }}" class="nav-link">
      
                                    <i class="nav-icon far fa-image"></i>
      
                                    <p>
      
                                        Logout
      
                                    </p>
      
                                </a>
      
                            </li> 

                        </ul>

                    </nav>

                    <!-- /.sidebar-menu -->

                </div>

                <!-- /.sidebar -->

            </aside>

            <!-- Content Wrapper. Contains page content -->

            <div class="content-wrapper">

                @yield('content')

                <!-- /.content -->

            </div>

            <!-- /.content-wrapper -->

            <footer class="main-footer">

                <strong>Copyright &copy; 2020 <a href="http://adminlte.io">Lelang</a>.</strong>

                All rights reserved.

            </footer>

            <!-- Control Sidebar -->

            <aside class="control-sidebar control-sidebar-dark">

                <!-- Control sidebar content goes here -->

            </aside>

            <!-- /.control-sidebar -->

        </div>

        <!-- ./wrapper -->

        <!-- jQuery -->

        <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>

        <!-- jQuery UI 1.11.4 -->

        <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

        <script>

        $.widget.bridge('uibutton', $.ui.button)

        </script>

        <!-- Bootstrap 4 -->

        <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- ChartJS -->

        <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>

        <!-- Sparkline -->

        <script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>

        <!-- JQVMap -->

        <script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>

        <script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

        <!-- jQuery Knob Chart -->

        <script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

        <!-- daterangepicker -->

        <script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>

        <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>

        <!-- Tempusdominus Bootstrap 4 -->

        <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

        <!-- Summernote -->

        <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>

        <!-- overlayScrollbars -->

        <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

        <!-- AdminLTE App -->

        <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

        <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>

        <!-- AdminLTE for demo purposes -->

        <script src="{{ asset('admin/dist/js/demo.js') }}"></script>

        <!-- DataTables -->

        <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>

        <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

        <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>

        <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

        <script>
            $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            });
        </script>

        @yield('script')

    </body>

    </html>