<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RecipeShareController extends Controller
{
	public function getTest(){

	    $recipe = new \App\UserRecipe();
	    echo $recipe->getTable();

	}

	//rest
}
