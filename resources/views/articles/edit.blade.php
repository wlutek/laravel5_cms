@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edytuj Artykuł</div>
<form method="POST" action="{{ action('ArticleController@edit', ['id' => $article->id]) }}">
	<input name="_method" type="hidden" value="PATCH">
	{!! csrf_field() !!}
	<div>
		Tytuł: 
		<input type="text" name="title" value="<?= $article->title; ?>">
	</div>
        <div>
		Zajawka na liście artykułów: 
		<input type="text" name="shortDesc" value="<?= $article->shortDesc; ?>">
	</div>
        <div>
		Artykuł: 
		<input type="text" name="fullDesc" value="<?= $article->fullDesc; ?>">
	</div>

	<div>
		<button type="submit">Aktualizacja</button>
	</div>
</form>

<form method="POST" action="{{ action('ArticleController@destroy', ['id' => $article->id]) }}">
	<input name="_method" type="hidden" value="delete">
	{!! csrf_field() !!}
	<div>
		<button type="submit">Usuń</button>
	</div>
</form>
@if ($errors->any())
	<ul class="alert alert-danger">
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif
            </div>
        </div>
    </div> 
</div>
@endsection