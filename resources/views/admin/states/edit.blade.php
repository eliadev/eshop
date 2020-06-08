@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit State</div>
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
                    <form action="{{route('states.update', $state->id)}}" method="POST" enctype="multipart/form-data">
						@method('put')
						@csrf
						<div class="form-group row">
							<label for="country_id">Countries</label>
							<select class="form-control" name="country_id">
							 <option disabled selected hidden>-- Select Country --</option>
								@foreach($countries as $country)
									<option value="{{$country->id}}"	
									@if($country->id == $state->country_id)
									selected
									@endif
									>{{ $country->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group row">
							<label for="name">State Name</label>
							<input type="text" id="name" name="name" value="{{$state->name}}" class="form-control" placeholder="State Name">
						</div>
						<div class="form-group row">
							<button type="submit" class="btn btn-success">UPDATE</button>
							<a href="{{route('states.create')}}" class="btn btn-secondary">ADD NEW</a>
							<a href="{{route('states.index')}}" class="btn btn-secondary">BACK</a>
						</div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection