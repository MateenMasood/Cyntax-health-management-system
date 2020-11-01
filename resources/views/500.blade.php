@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Error Occured</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">500 Error</li>
							</ol>
						</div>
						<div class="btn btn-list">
							<a class="btn ripple btn-primary" href="#"><i class="fe fe-external-link"></i> Export</a>
							<a class="btn ripple btn-secondary" href="#"><i class="fe fe-download"></i> Download</a>
							<a class="btn ripple btn-info" href="#"><i class="fe fe-help-circle"></i> Help</a>
							<a class="btn ripple btn-danger dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								<i class="fe fe-settings"></i> Settings <i class="fas fa-caret-down ml-1"></i>
							</a>
							<div  class="dropdown-menu tx-13">
								<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i>View</a>
								<a class="dropdown-item" href="#"><i class="fe fe-plus-circle mr-2"></i>Add</a>
								<a class="dropdown-item" href="#"><i class="fe fe-mail mr-2"></i>Email</a>
								<a class="dropdown-item" href="#"><i class="fe fe-folder-plus mr-2"></i>Save</a>
								<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i>Remove</a>
								<a class="dropdown-item" href="#"><i class="fe fe-settings mr-2"></i>More</a>
							</div>
						</div>
					</div>
					<!-- End Page Header -->
@endsection
@section('content')
					<!-- Row -->
					<div class="row sidemenu-height">
						<div class="col-md-12">
							<div class="container error-image text-center">
								<div class="display-1 mb-2 mt-5">
									oops!
								</div>
								<div class="h2 mb-6">Error 500: Server Not Found</div>
								<h6 class="tx-inverse">The Server has been deserted for a while. Please be patient or try again later.</h6>
								<a class="btn ripple btn-primary mt-4 mb-4" href="{{ url('/' . $page='index') }}"> Back To Home </a>
							</div>
						</div>
					</div>
					<!-- End Row -->

				</div>
			</div>
			<!-- End Main Content-->
@endsection
@section('js')
<!-- Peity js-->
<script src="{{ URL::asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>
@endsection