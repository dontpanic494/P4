<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserIngredient extends Model
{
	
	public function recipes(){
		return $this->belongsToMany('\App\UserRecipe', 'recipe_ingredient', 'recipe_id', 'ingredient_id')->withTimestamps();
	}

	public static function getIngredientNames(){

		$ingredients = \App\UserIngredient::orderBy('name', 'ASC')->get();

	}
}
