@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Country</div>
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
                    <form action="{{route('countries.update', $country->id)}}" method="POST" enctype="multipart/form-data">
						@method('put')
						@csrf
						<div class="form-group row">
							<label for="name">Name</label>
							<input type="text" id="name" name="name" value="{{$country->name}}" class="form-control" placeholder="Name">
						</div>
						<div class="form-group row">
							<label for="sortname">Link</label>
							<input type="text" id="sortname" name="sortname" value="{{$country->sortname}}" class="form-control" placeholder="Sort Name">
						</div>
						<div class="form-group row">
							<label for="phonecode">Order</label>
							<input type="text" id="phonecode" name="phonecode" value="{{$country->phonecode}}" class="form-control" placeholder="Phone Code">
						</div>
						
						<div class="form-group row">
							<button type="submit" class="btn btn-success">UPDATE</button>
							<a href="{{route('countries.create')}}" class="btn btn-secondary">ADD NEW</a>
							<a href="{{route('countries.index')}}" class="btn btn-secondary">BACK</a>
						</div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection