

<div><a href="{{ action('CategoryController@create') }}">Dodaj Kategorię</a></div>
<h1>Kategorie</h1>
 
@foreach ($categories as $category)
	<div>
    		<p>{{ $category->name }}
    		<a href="{{ action('CategoryController@edit', ['id' => $category->id]) }}">Edytuj</a></p>
	</div>
@endforeach
