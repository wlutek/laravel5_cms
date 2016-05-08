
<h1>Dodaj Kategorię</h1>
<form method="POST" action="{{ action('CategoryController@store') }}">
	{!! csrf_field() !!}
	<div>
		Nazwa: 
		<input type="text" name="name" value="{{ old('name') }}">
	</div>

	<div>
		<button type="submit">Dodaj</button>
	</div>
</form>
@if (count($errors) > 0)
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif

