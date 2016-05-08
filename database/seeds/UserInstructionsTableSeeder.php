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
        	'instruction_text' => 'Take two pieces of your favorite bread and butter them up (both sides..trust me)',

    	]);

        DB::table('user_instructions')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_id' => '1',
        	'instruction_text' => 'On the stove, get a pan nice and hot. Cast iron works best.',

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
        	'instruction_text' => 'Take your favorite type of cheese, and sandwich-ize it using your buttered up bread.',

    	]);

        DB::table('user_instructions')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_id' => '1',
        	'instruction_text' => 'Toss the sandwich into the screaming hot pan, and place a lid/plate/something that will semi cover it on top of the sandwich.',

    	]);

        DB::table('user_instructions')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_id' => '1',
        	'instruction_text' => 'Cook semi-covered until golden brown on the outside and super melty and awesome on the inside.',

    	]);

        DB::table('user_instructions')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_id' => '1',
        	'instruction_text' => 'Toss the sandwich into the screaming hot pan, and place a lid/plate/something that will semi cover it on top of the sandwich.',

    	]);

        DB::table('user_instructions')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_id' => '2',
        	'instruction_text' => 'Combine 28oz of crushed tomatoes and 30oz of vegetable broth in a saucepan over medium heat.',

    	]);

        DB::table('user_instructions')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_id' => '2',
        	'instruction_text' => 'Once bubbling, reduce heat and add in 1 cup of cream. Season with salt and pepper, simmer for 15 minutes.',

    	]);

        DB::table('user_instructions')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_id' => '2',
        	'instruction_text' => "Puree the soup with an immersion blender - or something else I guess if you don't have one.",
        ]);

        DB::table('user_instructions')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_id' => '2',
        	'instruction_text' => "Puree the soup with an immersion blender - or something else I guess if you don't have one.",
        ]);

        DB::table('user_instructions')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_id' => '2',
        	'instruction_text' => "Serve it up with some fresh basil leaves as a garnish.",
        ]);

        DB::table('user_instructions')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_id' => '3',
        	'instruction_text' => "Buy a bowl-looking loaf of your favoite type of bread (or make your own bread with the ingredients listed).",
        ]);

        DB::table('user_instructions')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_id' => '3',
        	'instruction_text' => "Cut out the top of the loaf and remove the bread inside.",
        ]);

        DB::table('user_instructions')->insert([

        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'recipe_id' => '3',
        	'instruction_text' => "That's pretty much it...you're done.",
        ]);

    }
}
