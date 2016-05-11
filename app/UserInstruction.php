<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInstruction extends Model
{
	//protected $table = 'user_instructions';

    public function recipeStep(){
    	return $this->belongsTo('\App\UserRecipe', 'recipe_ingredient', 'recipe_id', 'ingredient_id')->withTimestamps();
    }
}
