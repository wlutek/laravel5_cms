
<h1>Dodaj Kategorię</h1>
<form method="POST" action="{{ action('ArticleController@store') }}">
	{!! csrf_field() !!}
	<div>
		Tytuł: 
		<input type="text" name="title" value="{{ old('title') }}">
	</div>
	<div>
		Zajawka na liście artykułów: 
		<input type="text" name="shortDesc" value="{{ old('shortDesc') }}">
	</div>
	<div>
		Artykuł:
		<input type="text" name="fullDesc" value="{{ old('fullDesc') }}">
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

