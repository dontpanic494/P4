@extends('layouts.master')

@section('content')
	<div class='row container'>
	    <h1>Delete Recipe</h1>
	    <p>Are you sure you want to delete <em>{{$recipe->recipe_name}}</em>?</p>
    </div>

<div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">Delete Recipe</h3>
  </div>
  <div class="panel-body">
    <p><strong><a href='/share/delete/{{$recipe->id}}'>Yes, delete it.</a></strong></p>
    <p><a href='/share/view/{{$recipe->id}}'>No, I changed my mind.</a></p>
</div>

@stop