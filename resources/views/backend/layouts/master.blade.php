<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>e-Exam Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin-assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/vendors/iconfonts/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/vendors/iconfonts/typicons/src/font/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset('admin-assets/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="{{ route('admin.index') }}">
            <img src="{{asset('admin-assets/images/logo.svg')}}" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="{{ route('admin.index') }}">
            <img src="{{asset('admin-assets/images/logo-mini.svg')}}" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +8801726919674</li>
          </ul>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <!-- Left side bar -->
        @include('backend.partials.left-sidebar')
        <!-- partial -->
        @yield('content')
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('admin-assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('admin-assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{asset('admin-assets/js/shared/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('admin-assets/js/demo_1/dashboard.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    
    <!-- End custom js for this page-->
  </body>
</html>