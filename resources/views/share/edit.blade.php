@extends('layouts.master')

@section('title')
	Edit Recipe
@stop

@section('content')

<div class='container row'>
	
	<h1>Edit Recipe <i>{{ $recipe->recipe_name }}</i></h1>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

	<form role="form" method="POST" action="/share/edit">

		<input type='hidden' name='id' value='{{$recipe->id}}'>

		{{ csrf_field() }}

		<label>Recipe Name</label>
		<div class='milti-field-wrapper'>
			<input class='inputfield' type="text" name="recipe_name" value= '{{ $recipe->recipe_name }}'></input>
		</div>
		<br>

		<label>Recipe Description</label>
		<div class='multi-field-wrapper'>
			<input class='inputfield' type="text" name="recipe_description" value= '{{ $recipe->recipe_description }}'></input>
		</div>
		<br>

	  	<label>Ingredients</label>
	    <div class="multi-field-wrapper">
	      <div class="multi-fields">
	      @foreach($ingredients_for_this_recipe as $ingredient => $ingredient_id)
		        <div class="multi-field">
		          <input class='inputfield' type="text" name="ingredients[]" value="{{ $ingredient_id }}">
		          <button type="button" class="remove-field btn btn-secondary btn-sm padded-mini">Remove</button>
		        </div>
	        @endforeach
	      </div>
		<button type="button" class="add-field btn btn-primary btn-sm padded">Add field</button>
		</div>

		<label>Instructions</label>
	    <div class="multi-field-wrapper">
	      <div class="multi-fields">
			@foreach($instructions_for_this_recipe as $instruction => $instruction_text)
		        <div class="multi-field">
		          <input class='inputfield' type="text" name="instructions[]" value="{{ $instruction_text }}">
		          <button type="button" class="remove-field btn btn-secondary btn-sm padded-mini">Remove</button>
		        </div>
			@endforeach
	      </div>
		<button type="button" class="add-field btn btn-primary btn-sm padded">Add field</button>
		</div>

		<label>Image URL</label>
		<div class='multi-field-wrapper'>
			<input class='inputfield' type="text" name="recipe_image" value= '{{ $recipe->recipe_image }}'></input>
		</div>
		<br>
		<button type="submit" class="btn btn-primary">Update Recipe</button>
		<br>
	</form>
	<br>
</div>


@stop

@section('body')

<script>
	$('.multi-field-wrapper').each(function() {
	    var $wrapper = $('.multi-fields', this);
	    $(".add-field", $(this)).click(function(e) {
	        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
	    });
	    $('.multi-field .remove-field', $wrapper).click(function() {
	        if ($('.multi-field', $wrapper).length > 1)
	            $(this).parent('.multi-field').remove();
	    });
	});
</script>

@stop
