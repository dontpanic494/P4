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

		$recipe = \App\UserRecipe::with('ingredients')->with('hasSteps')->find($id);
		//$steps = \App\UserRecipe::with('hasSteps')->find($id);

		$ingredients_for_this_recipe = $recipe->getIngredients();
		$instructions_for_this_recipe = $recipe->getInstructions();

		return view('share.view')->with('recipe', $recipe)->with('ingredients_for_this_recipe', $ingredients_for_this_recipe)->with('instructions_for_this_recipe',$instructions_for_this_recipe);

	}
}
