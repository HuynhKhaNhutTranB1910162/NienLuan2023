
@include('admin.header')
    
    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

 @include('admin.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    @include('admin.users.alert')
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<!-- ./wrapper -->

<!-- jQuery -->
@include('admin.footter')
</body>
</html>
