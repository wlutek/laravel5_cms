@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
<div><a href="{{ action('CategoryController@create') }}">Dodaj Kategorię</a></div>
            <div class="panel panel-default">
                <div class="panel-heading">Kategorie</div>
 @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@foreach ($categories as $category)
	<div>
    		<p>{{ $category->name }}
    		<a href="{{ action('CategoryController@edit', ['id' => $category->id]) }}">Edytuj</a></p>
	</div>
@endforeach
            </div>
        </div>
    </div> 
</div>
@endsection