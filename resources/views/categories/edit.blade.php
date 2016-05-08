@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edytuj Kategorię</div>
<form method="POST" action="{{ action('CategoryController@edit', ['id' => $category->id]) }}">
	<input name="_method" type="hidden" value="PATCH">
	{!! csrf_field() !!}
	<div>
		Nazwa kategorii: 
		<input type="text" name="name" value="<?= $category->name; ?>">
	</div>
	<div>
		<button type="submit">Aktualizacja</button>
	</div>
</form>
<form method="POST" action="{{ action('CategoryController@destroy', ['id' => $category->id]) }}">
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
