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

		// $data = $request->only('recipe_name', 'recipe_description', 'recipe_image');
		// $recipe = \App\UserRecipe::create($data);



		$recipe = new \App\UserRecipe();

		$recipe->recipe_name = $request->recipe_name;
		$recipe->recipe_description = $request->recipe_description;
		$recipe->recipe_image = $request->recipe_image;
		$recipe->ingredients()->sync($request->ingredients);
		$recipe->hasSteps()->sync($request->instructions);

		$recipe->save();

		\Session::flash('message','Your recipe was added');
		return redirect('/share');


	}
}
