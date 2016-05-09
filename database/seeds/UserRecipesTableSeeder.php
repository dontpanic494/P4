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
            'recipe_image' => 'http://www.capstonevt.org/sites/default/files/Grilled-Cheese-Sandwiches_1.jpg',

    	]);

        DB::table('user_recipes')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_name' => 'Classic Tomato Soup',
        	'recipe_description' => 'A classic tomato soup (duh)',
            'recipe_image' => 'http://www.finecooking.com/cms/uploadedimages/images/cooking/articles/issues_91-100/051091055_01_xlg.jpg',

    	]);

        DB::table('user_recipes')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_name' => 'Classic Bread Bowl',
        	'recipe_description' => 'A classic bread bowl...for like, soup and stuff (duh)',
            'recipe_image' => 'https://domestocrat.files.wordpress.com/2012/09/img_4333.jpg',

    	]);
    }
}
