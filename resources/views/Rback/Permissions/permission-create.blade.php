@extends('layouts.master')
@section('css')
<!---Select2 css-->
<link href="{{ URL::asset('assets/css/CustomCss/Rback/roles/role-create.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Empty Page</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Empty Page</li>
							</ol>
						</div>
						
					</div>
					<!-- End Page Header -->
@endsection
@section('content')
					<!-- Row -->
					<div class="row">
						<div class="col-lg-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Create Role</h6>
										
									</div>

									<div class="mt-3 mb-3">
										<form  id="formCreate">
											@csrf
										<div class="">
											<div class="row mb-3">
												<div class="col-lg-6 form-group">
													<label class="form-label">Permission: <span class="tx-danger">*</span></label>
													<input class="form-control" name="permission" placeholder="Enter permission" required="" type="text">
												</div>
											
											</div>
											<button class="btn ripple btn-primary pd-x-20" type="submit">Create Permission</button>
										</div>
									</form>
										
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

				</div>
			</div>
			<!-- End Main Content-->
@endsection
@section('js')

<!-- ********************** custom js file here *********************** -->
<script src="{{ URL::asset('assets/js/jquery.validate/jquery.validate.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.validate/additional-methods.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/notify.js') }}"></script>

<script src="{{ URL::asset('assets/CustomJs/Rback/Permissions/permission-create.js')}}"></script>

@endsection