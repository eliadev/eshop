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
								<li class="breadcrumb-item"><a href="{{route('users.index')}}">Users</a></li>
								<li class="breadcrumb-item active">Edit User</li>
							</ol>
						</div>
						<h4 class="page-title">Add / Edit User</h4>
					</div>
				</div>
			</div>     
			<div class="row">
				<div class="col-12">
					@if(session()->has('message'))
						<div class="alert alert-success">
							{{session()->get('message')}}
						</div>
					@endif
					@if($errors->all())
						<div class="alert alert-danger">
							<ul>
							@foreach($errors->all() as $error)
								<li>{{$error}}</li>			
							@endforeach
							</ul>
						</div>
					@endif
					<form action="{{route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
						@method('put')
						@csrf
						<div class="row">
							<div class="col-xl-8">
								<h4 class="header-title bg-header">Edit Content</h4>
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group mb-3">
													<label for="first_name">First Name</label>
													<input type="text" id="first_name" name="first_name" value="{{$user->first_name}}" class="form-control" placeholder="First Name">
												</div>
												<div class="form-group mb-3">
													<label for="last_name">Last Name</label>
													<input type="text" id="last_name" name="last_name" value="{{$user->last_name}}" class="form-control" placeholder="Last Name">
												</div>
												<div class="form-group mb-3">
													<label for="email">Email</label>
													<input type="email" id="email" name="email" value="{{$user->email}}" class="form-control" placeholder="Email">
												</div>
												<div class="form-group mb-3">
													<label for="password">Password</label>
													<input type="password" id="password" name="password" value="" class="form-control" placeholder="Password">
												</div>
												<div class="form-group mb-3">
													<label for="date_of_birth">Date of Birth</label>
													<input type="date" id="date_of_birth" name="date_of_birth" value="{{$user->date_of_birth}}" class="form-control" placeholder="Date of Birth">
												</div>
												<div class="form-group mb-3">
													<label for="phone">Phone</label>
													<input type="number" id="phone" name="phone" value="{{$user->phone}}" class="form-control" placeholder="Phone">
												</div>
												<div class="form-group mb-3">
													<label for="address">Address</label>
													<input type="text" id="address" name="address" value="{{$user->address}}" class="form-control" placeholder="Address">
												</div>
												<div class="form-group mb-3">
													<label for="position">Position</label>
													<input type="text" id="position" name="position" value="{{$user->position}}" class="form-control" placeholder="Position">
												</div>
												<div class="form-group mb-3">
													<label for="image">Image</label>
													<div class="row">
														<div class="col-md-6"><input type="file" name="image" class="form-control"></div>
														<div class="col-md-6">
															<img src="{{$user->getFirstMediaUrl('user', 'thumb')}}">
															<input type="checkbox" name="delete_existing_image" value="1">
														</div>
													</div>
												</div>
												<div class="form-group mb-3 col-md-6">
													<label for="is_active">Published</label>
													<input class="tgl tgl-light" id="is_active" name="is_active" type="checkbox" value="1" {{ ($user->is_active == "1")? "checked" : "" }}>
													<label class="tgl-btn" for="is_active"></label>
												</div>
												<div class="form-group mb-3">
													<label for="permission">Permission</label>
													<div class="row">
														@foreach($permissions as $permission)
														<div class="col-md-4 mb-1">
															<div class="checkbox checkbox-primary">
																<input id="{{ $permission->id }}" type="checkbox" name="permission[]" value="{{ $permission->id }}"
																@if($user->permissions->contains($permission->id)) checked=checked @endif>
																<label for="{{ $permission->id }}"> {{ $permission->name }}</label>
															</div>
														</div>
														@endforeach
													</div>
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
											<button type="submit" class="btn btn-success btn-rounded w-md waves-effect waves-light mb-5" style="width:100%;">UPDATE</button>
											<a href="{{route('users.create')}}" class="btn btn-secondary btn-rounded w-md waves-effect waves-light mb-5" style="width:100%;">ADD NEW</a>
											<a href="{{route('users.index')}}" class="btn btn-blue btn-rounded w-md waves-effect waves-light mb-5" style="width:100%;">BACK</a>
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