@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit CitY</div>
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
                    <form action="{{route('cities.update', $city->id)}}" method="POST" enctype="multipart/form-data">
						@method('put')
						@csrf
						<div class="form-group row">
							<label for="state_id">State</label>
							<select class="form-control" name="state_id">
							 <option disabled selected hidden>-- Select State --</option>
								@foreach($states as $state)
									<option value="{{$state->id}}"	
									@if($state->id == $city->state_id)
									selected
									@endif
									>{{ $state->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group row">
							<label for="name">City Name</label>
							<input type="text" id="name" name="name" value="{{$city->name}}" class="form-control" placeholder="City Name">
						</div>
						<div class="form-group row">
							<button type="submit" class="btn btn-success">UPDATE</button>
							<a href="{{route('cities.create')}}" class="btn btn-secondary">ADD NEW</a>
							<a href="{{route('cities.index')}}" class="btn btn-secondary">BACK</a>
						</div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection