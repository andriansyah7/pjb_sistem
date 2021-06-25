
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="{{asset('adminLTE')}}/dist/img/listrik4.png" >
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=0.8">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminLTE')}}/dist/css/adminlte.css">
  <!-- Google Font: Source Sans Pro -->
   <!-- daterange picker -->
   <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/daterangepicker/daterangepicker.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.38.0/css/tempusdominus-bootstrap-4.min.css" crossorigin="anonymous" />
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"></script>
   <!-- DataTables -->
   <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
  <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" >



</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown user user-menu">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" >
          <img src="{{asset('adminLTE')}}/dist/img/user.png" class="user-image img-circle elevation-2" alt="User Image" >
          <span class="hidden-xs">{{auth()->user()->user_name}}</span>
        </a>
      
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-secondary">
            <img src="{{asset('adminLTE')}}/dist/img/user.png" class="img-circle elevation-2" alt="User Image">

            <p>
            {{auth()->user()->user_name}}
              <small>{{auth()->user()->user_nid}}</small>
              <small>{{auth()->user()->jabatan->jabatan_name}},
              {{auth()->user()->fungsi->fungsi_name}}</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
          <p>
         
          <a href="edit-password/{{auth()->user()->user_nid}}"  style="float:left" class="badge badge-primary">Change Password <i class="fas fa-key"></i></a>       

          <a href="{{ route('logout') }}" style="float:right" class="badge badge-danger">Logout <i class="fas fa-sign-out-alt"></i></a>
          </p>
          </li>
          </li>
        </ul>
    
        </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-5">
    <!-- Brand Logo -->
    <a href="{{ url('/dashboard') }}" class="brand-link">
      <img src="{{asset('adminLTE')}}/dist/img/pjb.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: 5">
      <span class="brand-text font-small font-light">UP Muara Tawar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      @include('Template.sidebar')
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('title')</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div>
              @yield('container')
              </div>
          </div>
        </div>
      
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2021 <a href="#">SystemOwner PT PJB</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('sweetalert::alert')
<!-- jQuery -->
@include('Template.script')
 
</body>
</html>



