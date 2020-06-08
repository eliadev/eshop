@extends('layouts.app')
	@section('content')
		<div class="container">
			@if(session()->has('message'))
				<div class="alert alert-success">
					{{session()->get('message')}}
				</div>
			@endif						
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="col-md-12">
							<div class="text-sm-right">
								<a href="{{route('users.create')}}" class="btn btn-info btn-xs"><i class="mdi mdi-plus-circle mr-1"></i> Add New</a>
							</div>
						</div>
					</div>
					<table class="table table-centered table-striped" id="products-datatable">
						<thead>
							<tr>
								<th>Full Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($users as $user)
							<tr>
								<td>{{$user->first_name}} {{$user->last_name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->phone}}</td>
								<td><a href="{{route('users.edit', $user->id)}}" class="btn btn-info btn-xs">Edit</a> 
									<form onsubmit="return confirm('Are you sure you want to delete?');" class="d-inline-block" method="post" action="{{route('users.destroy', $user->id)}}">
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
@endsection