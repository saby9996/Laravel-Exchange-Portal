@extends('app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Update Profile: Photo</div>
					<div class="panel-body">
						
						@include('errors.alert')

						{!! Form::open(['url' => 'update/profile/photo', 'files' => true]) !!}

						<div class="form-group">
						{!! Form::label('filename', 'Profile photo:') !!}
						{!! Form::file('filename', ['class' => 'form-control']) !!}
						</div>

						<div class="form-group">
						<a href="/update/profile/interests">
							{!! Form::button('Skip', ['class' => 'btn btn-primary']) !!}
						</a>

						<div class="form-group">
							{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
						</div>

						{!! Form::close() !!}

@endsection