@extends('app')

@section('content')

	<h1>Items</h1>

	@foreach ($items as $item)
		<div class=" col-md-5 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">{{ $item->title }}</div>
					<div class="panel-body">
						{{ $item->description }}
						{!! Form::open(['method' => 'DELETE','action' => ['ItemsController@destroy', $item->id]]) !!}
						<div class="form-group">
						<a href="{!! action('ItemsController@show', $item->id) !!}" class="btn btn-primary">
							View Item
						</a>

						<a href="{!! action('ItemsController@edit', $item->id) !!}" class="btn btn-primary">
							Edit Item
						</a>
						{!! Form::submit('Delete Item', ['class' => 'btn btn-primary']) !!}

						</div>
					</div>
			</div>
		</div>
	@endforeach

@endsection