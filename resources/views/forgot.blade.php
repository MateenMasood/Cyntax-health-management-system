@extends('layouts.master2')
@section('css')
@endsection
@section('content')
		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row text-center pl-0 pr-0 ml-0 mr-0">
				<div class="col-lg-3 d-block mx-auto">
					<div class="text-center mb-2">
						<img src="{{URL::asset('assets/img/brand/logo.png')}}" class="header-brand-img" alt="logo">
						<img src="{{URL::asset('assets/img/brand/logo-light.png')}}" class="header-brand-img theme-logos" alt="logo">
					</div>
					<div class="card custom-card">
						<div class="card-body">
							<h4 class="text-center">Forgot Password</h4>
							<form>
								<div class="form-group text-left">
									<label>Email</label>
									<input class="form-control" placeholder="Enter your email" type="text" value="">
								</div>
								<button class="btn ripple btn-main-primary btn-block">Request reset link</button>
							</form>
						</div>
						<div class="card-footer border-top-0 text-center">
							<p>Did you remembered your password?</p>
							<p class="mb-0"><a href="{{ url('/' . $page='signup') }}">Try to Signin</a></p>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row-->

		</div>
		<!-- End Page -->
@endsection
@section('js')
@endsection