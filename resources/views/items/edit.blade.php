@extends('app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Edit an item</div>
					<div class="panel-body">
						
						@include('errors.alert')

						{!! Form::model($item, ['method' => 'PATCH', 'action' => ['ItemsController@update', $item->id], 'files' => 'true']) !!}

						@include('items.form')

						<div class="form-group">
							{!! Form::submit('Update item', ['class' => 'btn btn-primary form-control']) !!}
						</div>
						
						{!! Form::close() !!}

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection