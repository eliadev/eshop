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
								<li class="breadcrumb-item"><a href="{{route('brands.index')}}">Brands</a></li>
								<li class="breadcrumb-item active">Create Brand</li>
							</ol>
						</div>
						<h4 class="page-title">Add / Edit Brand</h4>
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
					<form action="{{route('brands.store')}}" method="POST" enctype="multipart/form-data">
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
													<label for="image">Image</label>
													<input type="file" id="image" name="image" class="form-control">
												</div>
												<div class="form-group mb-3">
													<label for="link">Link</label>
													<input type="text" id="link" name="link" class="form-control" placeholder="link">
												</div>
												<div class="form-group mb-3">
													<label for="order">Order</label>
													<input type="number" id="order" name="order" class="form-control" placeholder="Order">
												</div>
												<div class="form-group mb-3">
													<label for="description">Description</label>
													<textarea class="form-control" name="description" id="summernote-editor"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4">
							<h4 class="header-title bg-header">Action</h4>
								<div class="card">
									<div class="card-body">
										<div class="form-actions">
											<input class="btn btn-block btn-md btn-success btn-rounded waves-effect waves-light" type="submit" value="SAVE">
											<a href="{{route('brands.index')}}" class="btn btn-block btn-md btn-secondary btn-rounded waves-effect waves-light">BACK</a>
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


