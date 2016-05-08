<?php

use Illuminate\Database\Seeder;

class UserInstructionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_instructions')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_id' => '1',
        	'instruction_text' => 'Take two pieces of your favorite bread and set them aside',

    	]);

        DB::table('user_instructions')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_id' => '1',
        	'instruction_text' => 'Butter both sides of both pieces of bread',

    	]);

        DB::table('user_instructions')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_id' => '1',
        	'instruction_text' => 'Toss a bit of butter into a hot pan',

    	]);

        DB::table('user_instructions')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_id' => '1',
        	'instruction_text' => 'Place some of your favorite cheese on your bread and make a sandwitch',

    	]);

        DB::table('user_instructions')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_id' => '1',
        	'instruction_text' => 'Fry the sandwich',

    	]);
    }
}
