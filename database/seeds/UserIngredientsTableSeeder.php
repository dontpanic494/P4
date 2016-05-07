<?php

use Illuminate\Database\Seeder;

class UserIngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_ingredients')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'ingredient_name' => 'Bread',

    	]);

        DB::table('user_ingredients')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'ingredient_name' => 'Cheese',

    	]);

        DB::table('user_ingredients')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'ingredient_name' => 'Butter',

    	]);

        DB::table('user_ingredients')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'ingredient_name' => 'Tomato',

    	]);

        DB::table('user_ingredients')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'ingredient_name' => 'Vegetable Broth',

    	]);

        DB::table('user_ingredients')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'ingredient_name' => 'Cream',

    	]);

        DB::table('user_ingredients')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'ingredient_name' => 'Basil',

    	]);

        DB::table('user_ingredients')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'ingredient_name' => 'Yeast',

    	]);

        DB::table('user_ingredients')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'ingredient_name' => 'Egg',

    	]);

        DB::table('user_ingredients')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'ingredient_name' => 'Flour',

    	]);

        DB::table('user_ingredients')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'ingredient_name' => 'Salt',

    	]);
    }
}
