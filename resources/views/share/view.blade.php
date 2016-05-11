@extends('layouts.master')

@section('title')

	View Recipe: {{ $recipe->recipe_name }}

@stop

@section('content')

	<h1>{{ $recipe->recipe_name }}</h1>
	<h3>{{ $recipe->recipe_description }}</h3>
	<div class='row container padded'>
	<img src=' {{ $recipe->recipe_image }}' class= 'img-responsive' alt= 'Image for {{ $recipe->recipe_name }}'>
	</div>

	<div class='list-group'>
		<a href="#" class="list-group-item active">Ingredients</a>
		@foreach($ingredients_for_this_recipe as $ingredient => $ingredient_id)
			<a href='#' class='list-group-item'>{{ $ingredient_id }}</a>
		@endforeach
	</div>

	<div class='list-group'>
		<a href="#" class="list-group-item active">Instructions</a>
		<a href='#' class='list-group-item'>
		@foreach($instructions_for_this_recipe as $instruction => $instruction_text)
			<p>{{ $instruction_text }}</p>
		@endforeach
		</a>
	</div>

	<div>
		<a href='/share/confirm-delete/{{ $recipe->id }}'>Delete recipe</a>
	</div>


@stop

<!--
<div class="list-group">
  <a href="#" class="list-group-item active">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item">Dapibus ac facilisis in
  </a>
  <a href="#" class="list-group-item">Morbi leo risus
  </a>
</div>
-->