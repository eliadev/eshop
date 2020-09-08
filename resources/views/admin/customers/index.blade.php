@extends('layouts.cmslayout')
	@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="page-title-box">
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
								<li class="breadcrumb-item">Customers</li>
							</ol>
						</div>
						<h4 class="page-title">Customers</h4>
					</div>
				</div>
			</div>
			@if(session()->has('message'))
				<div class="alert alert-success">
					{{session()->get('message')}}
				</div>
			@endif						
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<form class="form-inline">
										<div class="form-group">
											<label for="inputPassword2" class="sr-only">Search</label>
											<input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
										</div>
									</form>                            
								</div>
								<div class="col-md-6">
									<div class="text-sm-right">
										<a href="#" class="btn btn-blue waves-effect waves-light"><i class="mdi mdi-plus-circle mr-1"></i> Add New</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-centered table-striped" id="products-datatable">
									<thead>
										<tr>
											<th style="width: 20px;">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label" for="customCheck1">&nbsp;</label>
												</div>
											</th>
											<th>Customers Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Verified</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									@foreach($users as $user)
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label" for="customCheck1">&nbsp;</label>
												</div>
											</td>
											<td>{{ $user->FullName }}</td>
											<td>{{ $user->email }}</td>
											<td>{{ $user->phone }}</td>
											<td>{!! $user->is_verified == 1 ? '<span class="badge badge-success">is verified</span>' : '<span class="badge badge-warning">not verified</span>' !!}</td>
											<td>
												<a href="#" class="btn btn-info btn-xs waves-effect waves-light"><i class=" mdi mdi-file-outline"></i></a>
												<form onsubmit="return confirm('Are you sure you want to delete?');" class="d-inline-block" method="post" action="{{route('customers.destroy', $user->id)}}">
												@csrf
													<button type="submit" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></button>
												</form>
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>				
@endsection