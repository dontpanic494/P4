<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_ingredients', function (Blueprint $table){

            #incrementing ID field
            $table->increments('id');

            #created/updated timestamps
            $table->timestamps();
            
            #main data
            $table->string('ingredient_name');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_ingredients');
    }
}
