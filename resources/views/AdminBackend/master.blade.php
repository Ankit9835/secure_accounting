<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>
     <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/dist/img/logo.jpg') }}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset ('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  {{-- <link rel="stylesheet" href="{{ asset ('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('backend/dist/css/adminlte.min.css') }}">
  
  <!-- Google Font: Source Sans Pro -->
  @stack('css')
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
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
           <a href="{{url('admin/chpwd')}}" class="dropdown-item">
             <i class="fas fa-key nav-icon"></i> Change Password
           </a>
           <div class="dropdown-divider"></div>
          
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt nav-icon"></i>      {{ __('Logout') }}
           </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                       @csrf
           </form>
         </div>
       </li>
     </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin/home')}}" class="brand-link">
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
          <a href="#" class="d-block">{{ Auth::User()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              
             <!--  <li class="nav-item">
                <a href="{{url('admin/role')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products</p>
                </a>
              </li> -->
              
             
          <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('customer.category')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
               <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Buyers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('customer.buyer') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Buyers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('buyer.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Buyers</p>
                </a>
              </li>
             
            </ul>
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Expenses
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('customer.expense') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Expenses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('expense.list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Expenses</p>
                </a>
              </li>
             
            </ul>
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Sellers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sellers.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Sellers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sellers.list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Sellers</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Brands
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('brands.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Brands</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('brands.list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Brands</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('products.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('products.list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Products</p>
                </a>
              </li>
             
            </ul>
          </li>
              
              <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoices</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Credit Notes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Debit Notes</p>
                </a>
              </li> -->
             
             <!--  <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reports</p>
                </a>
              </li> -->
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

  <!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

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
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}">  </script> 
<script src="{{ asset('backend/dist/js/pages/dashboard3.js')}}"></script>
<script src="https://kit.fontawesome.com/38e8702452.js" crossorigin="anonymous"></script>
 <script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script>  

      <script>  
           $(document).on("click", "#delete", function(e){
               e.preventDefault();
               var link = $(this).attr("href");
                  swal({
                    title: "Are you Want to delete?",
                    text: "Once Delete, This will be Permanently Delete!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((willDelete) => {
                    if (willDelete) {
                         window.location.href = link;
                    } else {
                      swal("Safe Data!");
                    }
                  });
              });
    </script> 
</body>
</html>