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

	public function getShare(){

		$recipes = \App\UserRecipe::orderBy('id')->get();

		return view('share.share')->with('recipes', $recipes);
	}

	public function getView($id){

		$recipe = \App\UserRecipe::with('ingredients')->find($id);

		$ingredients_for_this_recipe = $recipe->getIngredients();

		return view('share.view')->with('recipe', $recipe)->with('ingredients_for_this_recipe', $ingredients_for_this_recipe);

	}
}
