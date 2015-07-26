<div class="form-group">
{!! Form::label('title', 'Title') !!}
{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Name your item/service']) !!}
</div>

<div class="form-group">
	{!! Form::label('description', 'Description') !!}
	{!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description to your item/service']) !!}
</div>

<div class="form-group">
	{!! Form::label('category', 'Category') !!}
	{!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
</div>
