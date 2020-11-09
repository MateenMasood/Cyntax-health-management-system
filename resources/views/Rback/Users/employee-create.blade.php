@extends('layouts.master')
@section('css')
<!---Select2 css-->

<link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

<!---Datetimepicker css-->
<link href="{{ URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">

<!-- ****************** custom js file ********************* -->

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
										<h6 class="card-title mb-1">Create User</h6>
										
									</div>

									<div class="mt-3 mb-3">
										<form  id="formCreate">
											@csrf
										<div class="">
											<div class="row ">
												<!-- ***************** eployee first name  -->
												<div class="col-lg-6 form-group">
													<label class="form-label">First Name: <span class="tx-danger">*</span></label>
													<input class="form-control" name="firstName" placeholder="Enter your first name" required="" type="text">
												</div>

												<!-- ****************** employee last name *************** -->
												<div class="col-lg-6 form-group">
													<label class="form-label">Last Name: <span class="tx-danger">*</span></label>
													<input class="form-control" name="lastName" placeholder="Enter your last name" required="" type="text">
												</div>
											
											</div>

											<div class="row">
												<!-- ***************** eployee email  -->
												<div class="col-lg-6 form-group">
													<label class="form-label">Email: <span class="tx-danger">*</span></label>
													<input class="form-control" name="email" placeholder="Enter your email" required="" type="email">
												</div>

												<!-- ****************** employee phone number *************** -->
												<div class="col-lg-6 form-group">
													<label class="form-label">Phone Number: <span class="tx-danger">*</span></label>
													<input class="form-control" name="phoneNo" placeholder="Enter your phone number" required="" type="text">
												</div>
											
											</div>

											<div class="row">
												<!-- ***************** eployee password  -->
												<div class="col-lg-6 form-group">
													<label class="form-label">Password: <span class="tx-danger">*</span></label>
													<input class="form-control" name="password" id="password" placeholder="Enter your password" required="" type="password">
												</div>

												<!-- ****************** employee confirm password *************** -->
												<div class="col-lg-6 form-group">
													<label class="form-label">Confirm Password: <span class="tx-danger">*</span></label>
													<input class="form-control" name="retypePassword" placeholder="Enter your password again" required="" type="password">
												</div>
											
											</div>

											<div class="row">
												<!-- ***************** eployee roles  -->
												<div class="col-lg-6 form-group">
													<label class="form-label">Role: <span class="tx-danger">*</span></label>
													<select class="form-control select2" name="roleId" id="roleId">
												        <option label="Choose one">
												        </option>
												        
											        </select>
												</div>

												<!-- ****************** employee date of birth *************** -->
												<div class="col-lg-6 form-group">
													<label class="form-label">Date of Birth: <span class="tx-danger">*</span></label>
													<input class="form-control fc-datepicker" name="dateOfBirth" placeholder="MM/DD/YYYY" type="text">
												</div>
											
											</div>

											<div class="row mb-3">
												<!-- ***************** eployee address  -->
												<div class="col-lg-12 form-group">
													<label class="form-label">Address: <span class="tx-danger">*</span></label>
													<textarea class="form-control" name="address" rows="2" placeholder="Enter your address"></textarea>
												</div>

											
											
											</div>
											<button class="btn ripple btn-primary pd-x-20" type="submit">Create User</button>
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

<!-- Select2 js-->
<script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

<script src="{{ URL::asset('assets/js/jquery.validate/jquery.validate.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.validate/additional-methods.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/notify.js') }}"></script>

<!-- Simple-Datepicker js-->
<script src="{{ URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/pickerjs/picker.min.js') }}"></script>

<!-- Jquery-Ui js-->
<script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

<!-- ********************** custom js file here *********************** -->

<script src="{{ URL::asset('assets/CustomJs/Rback/Users/employee-create.js')}}"></script>

@endsection