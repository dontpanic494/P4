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

	public function getView($id = null){

		$recipe = \App\UserRecipe::with('ingredients')->with('hasSteps')->find($id);

		if(is_null($recipe)){
			\Session::flash('message', 'Recipe not found.');
			return redirect('/share');
		}

		$ingredients_for_this_recipe = $recipe->getIngredients();
		$instructions_for_this_recipe = $recipe->getInstructions();

		return view('share.view')
			->with('recipe', $recipe)
			->with('ingredients_for_this_recipe', $ingredients_for_this_recipe)
			->with('instructions_for_this_recipe',$instructions_for_this_recipe);

	}

	public function postAdd(Request $request){

		## Form Validation

		$this->validate($request,[
				'recipe_name' => 'required|min:3|max:50',
				'recipe_description' => 'required|min:3|max:140',
				'recipe_image' => 'required|url',
				'ingredients.*' => 'required|min:1|max:30',
				'instructions.*' => 'required|min:3|max:140',
			]);	

		##################

		$recipe = new \App\UserRecipe();
		$recipe->recipe_name = $request->recipe_name;
		$recipe->recipe_description = $request->recipe_description;
		$recipe->recipe_image = $request->recipe_image;

		$recipe->save();

		foreach ($request->ingredients as $ingredient) {
			$newIngredient = new \App\UserIngredient();
			$newIngredient->ingredient_name = $ingredient;
			$newIngredient->save();

			$recipe->ingredients()->save($newIngredient);

		}

		foreach ($request->instructions as $instruction) {
			$newInstruction = new \App\UserInstruction();
			$newInstruction->instruction_text = $instruction;
			$newInstruction->recipe_id = $recipe->id;

			$newInstruction->save();

		}

		\Session::flash('message',$recipe->recipe_name.' has been added!');
		return redirect('/share');


	}

	public function getEdit($id = null){
		
		$recipe = \App\UserRecipe::with('ingredients')->with('hasSteps')->find($id);

		if(is_null($id)){
			return redirect('/share');
		}

		if($id == 1){
			\Session::flash('message', "DON'T CHANGE THE GRILLED CHEESE IT'S PERFECT THE WAY IT IS!!!");
			return redirect('/share/view/1');
		}

		$ingredients_for_this_recipe = $recipe->getIngredients();
		$instructions_for_this_recipe = $recipe->getInstructions();
		
		return view('share.edit')
			->with('recipe', $recipe)
			->with('ingredients_for_this_recipe', $ingredients_for_this_recipe)
			->with('instructions_for_this_recipe',$instructions_for_this_recipe);

	}

	public function postEdit(Request $request){

		## Form Validation

		$this->validate($request,[
				'recipe_name' => 'required|min:3|max:50',
				'recipe_description' => 'required|min:3|max:140',
				'recipe_image' => 'required|url',
				'ingredients.*' => 'required|min:1|max:30',
				'instructions.*' => 'required|min:3|max:140',
			]);	

		##################

		$recipe = \App\UserRecipe::with('ingredients')->with('hasSteps')->find($request->id);

		$recipe->recipe_name = $request->recipe_name;
		$recipe->recipe_description = $request->recipe_description;
		$recipe->recipe_image = $request->recipe_image;

		$recipe->save();

		if($recipe->hasSteps()){

			$recipe->hasSteps()->forceDelete();

		}

		if($recipe->ingredients()){

			$recipe->ingredients()->detach();

		}

		foreach ($request->ingredients as $ingredient) {


			$newIngredient = new \App\UserIngredient();
			$newIngredient->ingredient_name = $ingredient;
			$newIngredient->save();

			$recipe->ingredients()->save($newIngredient);

		}

		foreach ($request->instructions as $instruction) {

			$newInstruction = new \App\UserInstruction();
			$newInstruction->instruction_text = $instruction;
			$newInstruction->recipe_id = $recipe->id;

			$newInstruction->save();

		}

		\Session::flash('message',$recipe->recipe_name.' has been updated.');
		return redirect('/share/edit/'.$request->id);

	}

	public function getConfirmDelete($id = null){

		$recipe = \App\UserRecipe::with('ingredients')->with('hasSteps')->find($id);

		if(is_null($recipe)){
			return redirect('/share');
		}

		return view('share.delete')->with('recipe', $recipe);

	}

	public function getDelete($id = null){

		$recipe = \App\UserRecipe::with('ingredients')->with('hasSteps')->find($id);

		if(is_null($recipe)){
			\Session::flash('message', 'Recipe not found.');
			return redirect('/share');
		}

		if($id == 1){
			\Session::flash('message', "DON'T DELETE THE GRILLED CHEESE YOU MONSTER!!!");
			return redirect('/share');
		}

		if($recipe->ingredients()){

			$recipe->ingredients()->detach();

		}

		if($recipe->hasSteps()){

			$recipe->hasSteps()->forceDelete();

		}

		$recipe->delete();

		\Session::flash('message',$recipe->recipe_name.' was deleted.');
		return redirect ('/share');


	}
}
