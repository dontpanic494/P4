<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRecipe extends Model
{

	public function ingredients(){
		return $this->belongsToMany('\App\UserIngredient', 'recipe_ingredient', 'recipe_id', 'ingredient_id')->withTimestamps();
	}

	public function hasSteps(){
		return $this->hasMany('\App\UserInstruction', 'recipe_id');
	}

	public function getIngredients(){

		$ingredients_for_this_recipe = [];

		foreach($this->ingredients as $ingredient){
			$ingredients_for_this_recipe[] = $ingredient->ingredient_name;
		}

		return $ingredients_for_this_recipe;
	}

	public function getInstructions(){

		$instructions_for_this_recipe = [];

		foreach($this->hasSteps as $step){
			$instructions_for_this_recipe[] = $step->instruction_text;
		}

		return $instructions_for_this_recipe;

	}


}
