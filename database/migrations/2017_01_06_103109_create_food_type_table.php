<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('arabic_name', 50)->nullable();
            $table->string('english_name', 50)->nullable();
            $table->string('turkish_name', 50)->nullable();
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
        Schema::drop('food_type');
    }
}
