<?php

use Illuminate\Database\Seeder;

class UserRecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_recipes')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_name' => 'Classic Grilled Cheese',
        	'recipe_description' => 'A classic grilled cheese (duh)',

    	]);

        DB::table('user_recipes')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_name' => 'Classic Tomato Soup',
        	'recipe_description' => 'A classic tomato soup (duh)',

    	]);

        DB::table('user_recipes')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_name' => 'Classic Bread Bowl',
        	'recipe_description' => 'A classic bread bowl...for like, soup and stuff (duh)',

    	]);
    }
}
