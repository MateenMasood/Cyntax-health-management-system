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
						<div class="card-body main-profile-overview">
							<div class="mb-3">
								<div class="user-lock text-center">
									<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/1.jpg')}}">
								</div>
								<h6 class="mt-3 text-center">Sonia Taylor</h6>
							</div>
							<form action="{{ url('/' . $page='index') }}">
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" placeholder="Enter your password" type="password">
								</div>
								<button class="btn ripple btn-main-primary btn-block">Unlock</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
		<!-- End Page -->
@endsection
@section('js')
@endsection