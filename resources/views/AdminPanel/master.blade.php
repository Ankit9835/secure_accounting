<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>
  
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
     <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/dist/img/logo.jpg') }}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset ('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  {{-- <link rel="stylesheet" href="{{ asset ('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('backend/dist/css/adminlte.min.css') }}">
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="{{ asset ('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  @stack('css')
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style>
  
 .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #007bff;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
  pointer-events: none;
}
 .social-links a:hover {
  background: #0067d5;
  color: #fff;
}

</style>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown">
         <span class="hidden-xs">Account Settings</span>
       </a>
         <div class="dropdown-menu  dropdown-menu-right">
           <div class="dropdown-divider"></div>
           <a href="{{url('adminpanel/chpwd')}}" class="dropdown-item">
             <i class="fas fa-key nav-icon"></i> Change Password
           </a>
           <div class="dropdown-divider"></div>
           <a href="{{url('adminpanel/home')}}" class="dropdown-item">
             <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt nav-icon"></i>      {{ __('Logout') }}
           </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                       @csrf
           </form>
           </a>
         </div>
       </li>
     </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('adminpanel/home')}}" class="brand-link">
      <img src="{{asset('backend/dist/img/logo.jpg')}}" alt="Secure Accounting Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Secure Accounting</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/banner')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/role')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/users')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/contacts')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/subscriptions')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subscriptions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/gsetting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Setting</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
@yield('body')
<footer class="main-footer">
    <strong>Copyright &copy; @php echo date('Y'); @endphp <a href="#">Korawan India IT Solution</a>.</strong>
    All rights reserved.
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</div>
<!-- ./wrapper -->
  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="{{ asset ('backend/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  {{-- Change Password and logout section --}}
  <script src="{{ asset ('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- overlayScrollbars -->
  {{-- <script src="{{ asset ('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script> --}}
  <!-- AdminLTE App -->
  {{-- Side bar dark --}}
  <script src="{{ asset ('backend/dist/js/adminlte.js') }}"></script>
  @stack('js')
  <!-- OPTIONAL SCRIPTS -->
  {{-- Side bar dark --}}
  <script src="{{ asset ('backend/dist/js/demo.js') }}"></script>

{{-- <script src="{{ asset('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script> --}}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
{{-- <script src="{{ asset('backend/plugins/sparklines/sparkline.js')}}"></script> --}}
{{-- <!-- JQVMap -->
<script src="{{ asset('backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script> --}}
<!-- jQuery Knob Chart -->
{{-- <script src="{{ asset('backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script> --}}
<!-- daterangepicker -->
{{-- <script src="{{ asset('backend/plugins/moment/moment.min.js')}}"></script> --}}
{{-- <script src="{{ asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script> --}}
<!-- Tempusdominus Bootstrap 4 -->
{{-- <script src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script> --}}
<!-- Summernote -->
{{-- <script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js')}}"></script> --}}
<script src="{{ asset('backend/dist/js/pages/dashboard3.js')}}"></script>
{{-- Textarea Editor start --}}
<script src="{{ asset('backend/dist/js/ckeditor/ckeditor.js')}}"></script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
  CKEDITOR.replace('description')
  
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
  
  $(function () {
  CKEDITOR.replace('txtcon')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
   $(function () {
  CKEDITOR.replace('vdescptn')
    $('.textarea').wysihtml5()
  })
</script>
{{-- Textarea Editor end --}}
</body>
</html>