@extends('app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Update Profile: Contact Details</div>
					<div class="panel-body">
						
						@include('errors.alert')

						{!! Form::model($contact_details, ['url' => 'update/profile/contact']) !!}
						
						<div class='form-group'>
						{!! Form::label('phone', 'Phone number:') !!}
						{!! Form::text('phone', null, ['class' => 'form-control']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('line1', 'Address line 1:') !!}
							{!! Form::textarea('line1', null, ['class' => 'form-control', 'placeholder' => 'Address your primary address here!', 'rows' => '6']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('line2', 'Address line 2:') !!}
							{!! Form::textarea('line2', null, ['class' => 'form-control', 'placeholder' => 'Address your secondary address here. (If any)', 'rows' => '6']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('city', 'City') !!}
							{!! Form::select('city', $cities, null, ['class' => 'form-control']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('region', 'State/Region') !!}
							{!! Form::select('region', $regions, null, ['class' => 'form-control']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('country', 'Country') !!}
							{!! Form::select('country', $countries, null, ['class' => 'form-control']) !!}
						</div>

						<div class='form-group'>
						{!! Form::label('pincode', 'Pin Code:') !!}
						{!! Form::text('pincode', null, ['class' => 'form-control']) !!}
						</div>

						<div class="form-group">
						<a href="/update/profile/photo">
							{!! Form::button('Skip', ['class' => 'btn btn-primary']) !!}
						</a>

						{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
						</div>

						{!! Form::close() !!}

@endsection