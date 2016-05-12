@extends('layouts.master')

@section('content')

<div class="jumbotron">
  <h1>Recipe Share</h1>
  <p>Check out some of the awesome creations other users have come up with. Have any new ideas? Let's hear what you've got.</p>
  <p><a href='/share' class="btn btn-primary btn-lg">Refresh Recipes</a>  <a href='/share/add' class="btn btn-primary btn-lg">Add Recipe</a>
</div>

<div>
	@foreach($recipes as $recipe)
		<section class='recipe_block'>
			<h3>{{ $recipe->recipe_name }}</h3>

			<h4>{{ $recipe->recipe_description }}</h4>

			<a href='/share/view/{{ $recipe->id }}'>
			<img src=' {{ $recipe->recipe_image }}' class= 'img-responsive img-rounded recipe_thumb' alt= 'Image for {{ $recipe->recipe_name }}'>
			</a>
			
			<a href='/share/view/{{ $recipe->id }}'>View recipe</a>
			<br>
			<a href='/share/edit/{{ $recipe->id }}'>Edit</a>

		</section>
	@endforeach
</div>


@stop