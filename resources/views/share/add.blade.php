@extends('layouts.master')

@section('title')
	Add Recipe
@stop

@section('content')

<div class='container row'>

	<h1>Add New Recipe</h1>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

	<form role="form" method="POST" action="/share/add">

		{{ csrf_field() }}

		<label>Recipe Name</label>
		<div class='milti-field-wrapper'>
			<input class='inputfield' type="text" name="recipe_name" placeholder="recipe Name"></input>
		</div>
		<br>
		<label>Recipe Description</label>
		<div class='multi-field-wrapper'>
			<input class='inputfield' type="text" name="recipe_description" placeholder="description"></input>
		</div>
		<br>
	  	<label>Ingredients</label>
	    <div class="multi-field-wrapper">
	      <div class="multi-fields">
	        <div class="multi-field">
	          <input class='inputfield' type="text" name="ingredients[]" placeholder="click 'Add Field' for more ingredients">
	          <button type="button" class="remove-field btn btn-secondary btn-sm padded-mini">Remove</button>
	        </div>
	      </div>
		<button type="button" class="add-field btn btn-primary btn-sm padded">Add field</button>
		</div>
		<label>Instructions</label>
	    <div class="multi-field-wrapper">
	      <div class="multi-fields">
	        <div class="multi-field">
	          <input class='inputfield' type="text" name="instructions[]" placeholder="click 'Add Field' for more steps">
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
