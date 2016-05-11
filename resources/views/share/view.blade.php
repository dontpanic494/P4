@extends('layouts.master')

@section('title')

	View Recipe: {{ $recipe->recipe_name }}

@stop

@section('content')

	<h1>{{ $recipe->recipe_name }}</h1>
	<h3>{{ $recipe->recipe_description }}</h3>
	<div>
	<img src=' {{ $recipe->recipe_image }}' class= 'img-responsive' alt= 'Image for {{ $recipe->recipe_name }}'>
	</div>

	<div>
	@foreach($ingredients_for_this_recipe as $ingredient => $ingredient_id)
		<p>{{ $ingredient_id }}</p>
	@endforeach
	</div>

	<div>
		@foreach($instructions_for_this_recipe as $instruction => $instruction_text)
			<p>{{ $instruction_text }}</p>
		@endforeach
	</div>

	<div>
		<a href='/share/confirm-delete/{{ $recipe->id }}'>Delete recipe</a>
	</div>


@stop