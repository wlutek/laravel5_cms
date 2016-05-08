@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dodaj Artykuł</div>
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
		Id Categorii:
		<input type="text" name="category_id" value="{{ old('category_id') }}">
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

            </div>
        </div>
    </div> 
</div>
@endsection