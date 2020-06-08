@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User</div>
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
                <div class="card-body">
                    <form action="{{route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
						@method('put')
						@csrf
						<div class="form-group row">
							<label for="first_name">First Name</label>
							<input type="text" id="first_name" name="first_name" value="{{$user->first_name}}"  class="form-control" placeholder="First Name">
						</div>
						<div class="form-group row">
							<label for="last_name">Last Name</label>
							<input type="text" id="last_name" name="last_name" value="{{$user->last_name}}"  class="form-control" placeholder="Last Name">
						</div>
						<div class="form-group row">
							<label for="email">Email</label>
							<input type="email" id="email" name="email" value="{{$user->email}}"  class="form-control" placeholder="Email">
						</div>
						<div class="form-group row">
							<label for="password">Password</label>
							<input type="password" id="password" name="password" value=""  class="form-control" placeholder="Password">
						</div>
						<div class="form-group row">
							<label for="date_of_birth">Date of Birth</label>
							<input type="date" id="date_of_birth" name="date_of_birth" value="{{$user->date_of_birth}}"  class="form-control" placeholder="Date of Birth">
						</div>
						<div class="form-group row">
							<label for="phone">Phone</label>
							<input type="number" id="phone" name="phone" value="{{$user->phone}}"  class="form-control" placeholder="Phone">
						</div>
						<div class="form-group row">
							<label for="is_active">Active</label>
							<input type="checkbox" name="is_active" class="form-control" value="1" {{ ($user->is_active == "1")? "checked" : "" }}>
						</div>
						<div class="form-group row">
							<label for="permission">Permission</label>
							<div class="row">
								@foreach($permissions as $permission)
									<div>
										<input id="{{ $permission->id }}" type="checkbox" name="permission[]" value="{{ $permission->id }}"
										@if($user->permissions->contains($permission->id)) checked=checked @endif>
										<label for="{{ $permission->id }}"> {{ $permission->name }}</label>
									</div>
								@endforeach
							</div>
						</div>
						<div class="form-group row">
							<button type="submit" class="btn btn-success">UPDATE</button>
							<a href="{{route('users.create')}}" class="btn btn-secondary">ADD NEW</a>
							<a href="{{route('users.index')}}" class="btn btn-secondary">BACK</a>
						</div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection