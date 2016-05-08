

<div><a href="{{ action('ArticleController@create') }}">Dodaj Artykuł</a></div>
<h1>Artykuły</h1>
 
@foreach ($articles as $article)
	<div>
            <h1>{{ $article->title }}</h1>
                <p>{{ $article->shortDesc }}</p>
                <p>Kategoria: <strong>{{ $article->category->name }}</strong></p>
                <p>Utworzono: <strong>{{ $article->created_at }}</strong></p>
    		<a href="{{ action('ArticleController@edit', ['id' => $article->id]) }}">Edytuj</a>
	</div>
@endforeach
