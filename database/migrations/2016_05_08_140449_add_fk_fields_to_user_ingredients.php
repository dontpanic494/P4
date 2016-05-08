<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkFieldsToUserIngredients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_instructions', function(Blueprint $table){

            #Add fk fiends for the joins
            $table->integer('recipe_id')->references('id')->on('user_recipes');
            $table->integer('ingredient_id')->references('id')->on('user_ingredients');

            #Also adding main data instruction string
            $table->string('instruction_text');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_instructions', function(Blueprint $table){

            $table->dropColumn('recipe_id');
            $table->dropColumn('ingredient_id');
            $table->dropColumn('instruction_text');

        });
    }
}
