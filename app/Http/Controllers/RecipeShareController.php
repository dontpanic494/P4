<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RecipeShareController extends Controller
{

	public function getShare(){

		$recipes = \App\UserRecipe::orderBy('id')->get();

		return view('share.share')->with('recipes', $recipes);
	}

	public function getView($id){

		$recipe = \App\UserRecipe::with('ingredients')->with('hasSteps')->find($id);

		$ingredients_for_this_recipe = $recipe->getIngredients();
		$instructions_for_this_recipe = $recipe->getInstructions();

		return view('share.view')->with('recipe', $recipe)->with('ingredients_for_this_recipe', $ingredients_for_this_recipe)->with('instructions_for_this_recipe',$instructions_for_this_recipe);

	}

	public function postAdd(Request $request){

		$recipe = new \App\UserRecipe();

		$recipe->recipe_name = $request->recipe_name;
		$recipe->recipe_description = $request->recipe_description;
		$recipe->recipe_image = $request->recipe_image;

		$recipe->save();

		foreach ($request->ingredients as $ingredient) {
			$newIngredient = new \App\UserIngredient();
			$newIngredient->ingredient_name = $ingredient;
			$newIngredient->save();

			//$recipe->ingredients()->sync([$newIngredient->id]);
			$recipe->ingredients()->save($newIngredient);

		}

		foreach ($request->instructions as $instruction) {
			$newInstruction = new \App\UserInstruction();
			$newInstruction->instruction_text = $instruction;
			$newInstruction->recipe_id = $recipe->id;

			$newInstruction->save();

		}

		return redirect('/share');


	}
}
