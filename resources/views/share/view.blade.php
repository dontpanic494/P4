@extends('layouts.master')

@section('title')

	View Recipe: {{ $recipe->recipe_name }}

@stop

@section('content')

	<h1>{{ $recipe->recipe_name }}</h1>
	<img src=' {{ $recipe->recipe_image }}' class= 'img-responsive' alt= 'Image for {{ $recipe->recipe_name }}'>

	@foreach($ingredients_for_this_recipe as $ingredient => $ingredient_id)
		<p>{{ $ingredient_id }}</p>
	@endforeach

@stop