@extends('layouts.master')

@section('content')

<div class='container row'>
	<form role="form" method="POST" action="/share/add">

		{{ csrf_field() }}

		<label>Recipe Name</label>
		<div class='milti-field-wrapper'>
			<input class='inputfield' type="text" name="recipe_name" placeholder="Recipe Name"></input>
		</div>
		<br>
		<label>Recipe Description</label>
		<div class='multi-field-wrapper'>
			<input class='inputfield' type="text" name="recipe_description" placeholder="Description"></input>
		</div>
		<br>
	  	<label>Ingredients</label>
	    <div class="multi-field-wrapper">
	      <div class="multi-fields">
	        <div class="multi-field">
	          <input class='inputfield' type="text" name="ingredients[]" placeholder="Ingredient">
	          <button type="button" class="remove-field btn btn-secondary btn-sm padded-mini">Remove</button>
	        </div>
	      </div>
		<button type="button" class="add-field btn btn-primary btn-sm padded">Add field</button>
		</div>
		<label>Instructions</label>
	    <div class="multi-field-wrapper">
	      <div class="multi-fields">
	        <div class="multi-field">
	          <input class='inputfield' type="text" name="instructions[]" placeholder="Step">
	          <button type="button" class="remove-field btn btn-secondary btn-sm padded-mini">Remove</button>
	        </div>
	      </div>
		<button type="button" class="add-field btn btn-primary btn-sm padded">Add field</button>
		</div>
		<label>Image URL</label>
		<div class='multi-field-wrapper'>
			<input class='inputfield' type="text" name="recipe_image" placeholder="http://imagehostingsite.com/image"></input>
		</div>
		<br>
		<button type="submit" class="btn btn-primary">Add Recipe</button>
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
