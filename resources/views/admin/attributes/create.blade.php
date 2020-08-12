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
								<li class="breadcrumb-item"><a href="{{route('attributes.index')}}">Attributes</a></li>
								<li class="breadcrumb-item active">Create Attribute</li>
							</ol>
						</div>
						<h4 class="page-title">Add / Edit Attribute</h4>
					</div>
				</div>
			</div>     
			<div class="row">
				<div class="col-12">
					@if($errors->all())
						<div class="alert alert-danger">
							<ul>
							@foreach($errors->all() as $error)
								<li>{{$error}}</li>			
							@endforeach
							</ul> 
						</div>
					@endif
					<form action="{{route('attributes.store')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-xl-8">
								<h4 class="header-title bg-header">Edit Content</h4>
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group mb-3">
													<label for="name">Name</label>
													<input type="text" id="name" name="name" class="form-control" placeholder="Name">
												</div>
												
												<div class="form-group mb-3">
													<label for="code">Code</label>
													<input type="text" id="code" name="code" class="form-control" placeholder="Code">
												</div>
												
												<div class="form-group mb-3">
													<label for="frontend_type">Frontend Type</label>
													<select class="form-control" name="frontend_type">
														<option disabled selected hidden>Select Type</option>
														<option value="select">Select</option>
														<option value="radio">Radio</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-box">
									<h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Attribute Values</h5>
									<div class="panel panel-footer">
										<table class="table table-borderd">
											<thead>
												<tr>
													<th>Value</th>
													<th>Price</th>
													<th><span class="btn btn-success addRow">+</span></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><input type="text" name="addmore[0][value]" class="form-control"></td>
													<td><input type="text" name="addmore[0][price]" class="form-control"></td>
													<td><span class="btn btn-danger remove">X</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="col-xl-4">
							<h4 class="header-title bg-header">Action</h4>
								<div class="card">
									<div class="card-body">
										<div class="form-actions">
											<input class="btn btn-block btn-md btn-success btn-rounded waves-effect waves-light" type="submit" value="SAVE">
											<a href="{{route('attributes.index')}}" class="btn btn-block btn-md btn-secondary btn-rounded waves-effect waves-light">BACK</a>
										</div>
									</div>	  
								</div>
							</div>	    
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>				
@endsection
@section('scripts')
		<script type="text/javascript">
			$(document).ready(function(){
				var i = 0;
				$('.addRow').on('click', function() {
					addRow();
				});

				function addRow() {
					
					++i;
					var tr = '<tr>' +
						'<td><input type="text" name="addmore['+i+'][value]" class="form-control"></td>' +
						'<td><input type="text" name="addmore['+i+'][price]" class="form-control"></td>' +
						'<td><span class="btn btn-danger remove">X</span></td>' +
						'</tr>';
					$('tbody').append(tr);
				}; 
			 
			 });

			$(document).on('click', '.remove', function() {
				var last = $('tbody tr').length;
				if (last == 1) {
					alert("Last row cannot Delete");
				} else {
					$(this).parents('tr').remove();
				}
			});
		</script>
@endsection