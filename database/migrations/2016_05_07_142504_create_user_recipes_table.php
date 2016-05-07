<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_recipes', function (Blueprint $table){

            #incrementing ID field
            $table->increments('id');

            #created/updated timestamps
            $table->timestamps();

            #main data
            $table->string('recipe_name');
            $table->string('recipe_description');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_recipes');
    }
}
