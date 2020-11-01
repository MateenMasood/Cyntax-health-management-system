@extends('layouts.master2')
@section('css')
<!---Jquery.Coutdown css-->
<link href="{{ URL::asset('assets/plugins/jquery-countdown/jquery.countdown.css')}}" rel="stylesheet">
@endsection
@section('content')
		<!-- Page -->
		<div class="page main-signin-wrapper bg-primary">

			<div class="container">
				<div class="construction1 text-center text-white">
					<div class="">
						<h4 class="text-center display-4 font-weight-bold ">Coming soon</h4>
						<h5>We are Doing Some work on the site</h5>
						<div id="launch_date"></div>
					</div>
					<div class="text-center">© 2019  <a href="https://www.spruko.com/" class="text-white-50">Spruko</a> All rights reserved.</div>
				</div>
			</div>

		</div>
		<!-- End Page -->
@endsection
@section('js')		
<!-- Jquery.Coutdown js-->
<script src="{{ URL::asset('assets/plugins/jquery-countdown/jquery.plugin.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/jquery-countdown/jquery.countdown.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/jquery-countdown/countdown.js')}}"></script>
@endsection