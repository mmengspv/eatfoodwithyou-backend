<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatagoryFoodRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catagory_food_recipe', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Catagory::class); //catagory_id
            $table->foreignIdFor(\App\Models\FoodRecipe::class); //recipe_id
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
        Schema::dropIfExists('catagory_food_recipe');
    }
}
