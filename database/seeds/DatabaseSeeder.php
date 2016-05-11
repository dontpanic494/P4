<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserRecipesTableSeeder::class);
        $this->call(UserIngredientsTableSeeder::class);
        $this->call(UserInstructionsTableSeeder::class);
        $this->call(RecipeIngredientTableSeeder::class);
        $this->call(DefaultUserSeeder::class);
    }
}