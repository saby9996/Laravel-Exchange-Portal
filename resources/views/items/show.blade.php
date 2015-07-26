@extends('app')

@section('content')
	<div class=" col-md-5 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">{{ $item->title }}</div>
				<div class="panel-body">
					<p>Description: {{ $item->description }}</p>
					<p>Category: {{ $item->category->name }}</p>
					<p>Put up for exchange:
						@if($item->exchange)
							{{ 'Yes' }}
						@else
							{{ 'No' }}
						@endif
					</p>
				</div>
		</div>
	</div>
@endsection