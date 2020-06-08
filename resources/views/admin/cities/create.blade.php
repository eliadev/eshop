@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create City</div>
                <div class="card-body">
                    <form action="{{route('cities.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
						<div class="form-group row">
							<label for="state_id">States</label>
							<select class="form-control" name="state_id">
									<option disabled selected hidden>Select State</option>
								@foreach($states as $state)
									<option value="{{$state->id}}">{{$state->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group row">
							<label for="name">City Name</label>
							<input type="text" id="name" name="name" class="form-control" placeholder="City Name">
						</div>
						<div class="form-group row">
							<input type="submit" class="btn btn-block btn-md btn-success" value="SAVE">
							<a href="{{route('cities.index')}}" class="btn btn-secondary">BACK</a>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



