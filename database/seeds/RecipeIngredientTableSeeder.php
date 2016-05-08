<?php

use Illuminate\Database\Seeder;

class RecipeIngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$recipes = [

    	'Classic Grilled Cheese' => ['1', '2', '3'],
    	'Classic Tomato Soup' => ['4', '5', '6', '7'],
    	'Classic Bread Bowl' => ['8', '9', '10', '11'],

    	];

    	foreach ($recipes as $name => $ingredients) {
    		$recipe = \App\UserRecipe::where('recipe_name', 'LIKE', $name)->first();
    		//echo $recipe;
    		foreach($ingredients as $ingredientId){
    			$ingredient = \App\UserIngredient::where('id', 'LIKE', $ingredientId)->first();
    			//echo $ingredient;
    			$recipe->ingredients()->save($ingredient);
    		}
    	}
    }
}
