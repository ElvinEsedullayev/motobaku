<!DOCTYPE html>
<html lang="en">
@include('back\layouts\partials\head')
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  @include('back\layouts\partials\navbar')
  @include('back\layouts\partials\sidebar')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Moto Baku / AdminPanel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">AdminPanel</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
 @yield('content')
    
  </div>
  @include('back\layouts\partials\footer')

</div>
<!-- ./wrapper -->

@include('back\layouts\partials\script')
@yield('js')
</body>
</html>
