<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Dashlead -  Admin Panel HTML Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="sales dashboard, admin dashboard, bootstrap 4 admin template, html admin template, admin panel design, admin panel design, bootstrap 4 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">
		@include('layouts.head')
	</head>

	<body class="main-body dark-theme">
		<!-- Loader -->
		<div id="global-loader">
			<img src="{{URL::asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->

		<!-- Page -->
		<div class="page">
			@include('layouts.side-menu')
			<!-- Main Content-->
			<div class="main-content side-content pt-0">
				@include('layouts.main-header')
				<div class="container-fluid">
					@yield('page-header')
					@yield('content')
            		@include('layouts.sidebar')
            		@include('layouts.footer')
		</div>
		<!-- End Page -->
		@include('layouts.footer-scripts')	
	</body>
</html>