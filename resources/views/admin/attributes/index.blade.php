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
								<li class="breadcrumb-item">Attributes</li>
							</ol>
						</div>
						<h4 class="page-title">Attributes</h4>
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
										<a href="{{route('attributes.create')}}" class="btn btn-blue waves-effect waves-light"><i class="mdi mdi-plus-circle mr-1"></i> Add New</a>
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
											<th>Name</th>
											<th>code</th>
											<th>Frontend Type</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									@foreach($attributes as $attribute)
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label" for="customCheck1">&nbsp;</label>
												</div>
											</td>
											<td>{{$attribute->name}}</td>
											<td>{{$attribute->code}}</td>
											<td>{{$attribute->frontend_type}}</td>
											<td><a href="{{route('attributes.edit', $attribute->id)}}" class="btn btn-info btn-xs webtn">Edit</a> 
												<form onsubmit="return confirm('Are you sure you want to delete?');" class="d-inline-block" method="post" action="{{route('attributes.destroy', $attribute->id)}}">
												@csrf
													@method('delete')
													<button type="submit" class="btn btn-danger btn-xs webtn">Delete</button>
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