@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dodaj Kategorię</div>
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
            </div>
        </div>
    </div> 
</div>
@endsection

