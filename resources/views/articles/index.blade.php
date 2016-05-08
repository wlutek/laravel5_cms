@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Artykuły</div>
 @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@foreach ($articles as $article)
	<div>
            <h1>{{ $article->title }}</h1>
                <p>{{ $article->shortDesc }}</p>
                <p>Kategoria: <strong>{{ $article->category->name }}</strong></p>
                <p>Utworzono: <strong>{{ $article->created_at }}</strong></p>
<?php if (Auth::check()) { ?>
                <a href="{{ action('ArticleController@edit', ['id' => $article->id]) }}">Edytuj</a>
	</div>
<?php } ?>
<hr>
@endforeach
            </div>
        </div>
    </div> 
</div>
@endsection