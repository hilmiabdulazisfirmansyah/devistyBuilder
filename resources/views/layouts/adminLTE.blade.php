<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Admin Panel')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  @yield('css')

</head>
<body class="hold-transition sidebar-mini layout-fixed-footer">
<div class="wrapper">

  @yield('navbar')
  <!-- /.navbar -->

  @yield('sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('header')
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
     @yield('content')
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019-2020 <a href="http://www.facebook.com/devistycompany">Devisty Company</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>
  </footer>


</div>
<!-- ./wrapper -->


@yield('js')

</body>
</html>
