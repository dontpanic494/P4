<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRecipe extends Model
{
	public function ingredients(){
		return $this->belongsToMany('\App\UserIngredient', 'recipe_ingredient', 'recipe_id', 'ingredient_id')->withTimestamps();
	}
}
