@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create State</div>
                <div class="card-body">
                    <form action="{{route('states.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
						<div class="form-group row">
							<label for="country_id">Countries</label>
							<select class="form-control" name="country_id">
									<option disabled selected hidden>Select Country</option>
								@foreach($countries as $country)
									<option value="{{$country->id}}">{{$country->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group row">
							<label for="name">State Name</label>
							<input type="text" id="name" name="name" class="form-control" placeholder="State Name">
						</div>
						<div class="form-group row">
							<input type="submit" class="btn btn-block btn-md btn-success" value="SAVE">
							<a href="{{route('states.index')}}" class="btn btn-secondary">BACK</a>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



