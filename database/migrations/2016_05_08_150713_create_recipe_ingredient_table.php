<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeIngredientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_ingredient', function(Blueprint $table){

            #incrementing ID
            $table->increments('id');

            #created/updates timestamps
            $table->timestamps();

            #Add fk fiends for the joins
            ##initialize
            $table->integer('recipe_id')->unsigned();
            $table->integer('ingredient_id')->unsigned();

            ##make fk
            $table->foreign('recipe_id')->references('id')->on('user_recipes');
            $table->foreign('ingredient_id')->references('id')->on('user_ingredients');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('recipe_ingredient');
    }
}
