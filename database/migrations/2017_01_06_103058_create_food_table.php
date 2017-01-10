<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('food_type_id')->unsigned();
            $table->string('arabic_name', 50)->nullable();
            $table->string('english_name', 50)->nullable();
            $table->string('turkish_name', 50)->nullable();
            $table->text('arabic_description')->nullable();
            $table->text('english_description')->nullable();
            $table->text('turkish_description')->nullable();
            $table->float('price', 8, 2);
            $table->boolean('isvalid');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('food');
    }
}
