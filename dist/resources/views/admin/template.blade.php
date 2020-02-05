<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'decofruta admin')</title>
	
	<!-- Css Admin-->
    
    <!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('css/admin/plugins/fontawesome-free/css/all.min.css') }}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet" href="{{ asset('css/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
	<!-- iCheck -->
	<link rel="stylesheet" href="{{ asset('css/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
	<!-- JQVMap -->
	<link rel="stylesheet" href="{{ asset('css/admin/plugins/jqvmap/jqvmap.min.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('css/admin/dist/css/adminlte.min.css') }}">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="{{ asset('css/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="{{ asset('css/admin/plugins/daterangepicker/daterangepicker.css') }}">
	<!-- summernote -->
	<link rel="stylesheet" href="{{ asset('css/admin/plugins/summernote/summernote-bs4.css') }}">




  


</head>

<body class="hold-transition sidebar-mini layout-fixed">

  <div class="wrapper">

  	@include('admin.layouts.header')

    @include('admin.layouts.sidebar')

  	@yield('content')

  	@include('admin.layouts.footer')

  </div>



    <!-- JS Admin -->
  
	<!-- jQuery -->
	<script src="{{ asset('js/admin/plugins/jquery/jquery.min.js') }}"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="{{ asset('js/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="{{ asset('js/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<!-- ChartJS -->
	<script src="{{ asset('js/admin/plugins/chart.js/Chart.min.js') }}"></script>
	<!-- Sparkline -->
	<script src="{{ asset('js/admin/plugins/sparklines/sparkline.js') }}"></script>
	<!-- JQVMap -->
	<script src="{{ asset('js/admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
	<script src="{{ asset('js/admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
	<!-- jQuery Knob Chart -->
	<script src="{{ asset('js/admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
	<!-- daterangepicker -->
	<script src="{{ asset('js/admin/plugins/moment/moment.min.js') }}"></script>
	<script src="{{ asset('js/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="{{ asset('js/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
	<!-- Summernote -->
	<script src="{{ asset('js/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
	<!-- overlayScrollbars -->
	<script src="{{ asset('js/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('js/admin/dist/js/adminlte.js') }}"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="{{ asset('js/admin/dist/js/pages/dashboard.js') }}"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{ asset('js/admin/dist/js/demo.js') }}"></script>






<!-- DataTables -->
<script src="{{ asset('js/admin/plugins/datatables/jquery.dataTables.js') }}"></script>

<script src="{{ asset('js/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>





<!-- bs-custom-file-input formulario-->
<script src="{{ asset('js/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }} "></script>


<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>




</body>
</html>