@extends('layouts.master')

@section('content')
	<div class='jumbotron'>
	    <h1>Delete Recipe</h1>
	    <p>Are you sure you want to delete <em>{{$recipe->recipe_name}}</em>?</p>
	    <p><strong><a href='/share/delete/{{$recipe->id}}'>Yes, delete it.</a></strong></p>
	    <p><a href='/share/view/{{$recipe->id}}'>No, I changed my mind.</a></p>
    </div>
    
@stop