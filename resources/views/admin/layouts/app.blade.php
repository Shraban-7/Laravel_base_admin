<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel Shop :: Administrative Panel</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{ asset('admin_assets/plugins/fontawesome-free/css/all.min.css') }}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{ asset('admin_assets/css/adminlte.min.css') }}">
		<link rel="stylesheet" href="{{ asset('admin_assets/css/custom.css') }}">
	</head>
	<body class="hold-transition sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
			<!-- Navbar -->
			@include('admin.partials.navbar')
			<!-- /.navbar -->
			@include('admin.partials.sidebar')
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
			@yield('content')
			</div>
			<!-- /.content-wrapper -->
			@include('admin.partials.footer')

		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
		<script src="{{ asset('admin_assets/plugins/jquery/jquery.min.js') }}"></script>
		<!-- Bootstrap 4 -->
		<script src="{{ asset('admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- AdminLTE App -->
		<script src="{{ asset('admin_assets/js/adminlte.min.js') }}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{ asset('admin_assets/js/demo.js') }}"></script>
	</body>
</html>
