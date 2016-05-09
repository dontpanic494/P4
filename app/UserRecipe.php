<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRecipe extends Model
{
	public function ingredients(){
		return $this->belongsToMany('\App\UserIngredient', 'recipe_ingredient', 'recipe_id', 'ingredient_id')->withTimestamps();
	}

	public function getIngredients(){

		$ingredients_for_this_recipe = [];

		foreach($this->ingredients as $ingredient){
			$ingredients_for_this_recipe[] = $ingredient->id;
		}
		
		return $ingredients_for_this_recipe;
	}
}
