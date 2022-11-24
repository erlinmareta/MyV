<div>
<x-app-layout>
   
  
<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin/head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('admin/navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin/sidebar')

  <!-- page content -->
  @include('admin/main')
  
  <!-- Main Footer -->
  @include('admin/footer')
</div>


<!--SCRIPTS -->
@include('admin/script')

<!-- jQuery -->

</body>
</html>

</x-app-layout>
</div>