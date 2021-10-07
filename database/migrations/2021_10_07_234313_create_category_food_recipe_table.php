<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryFoodRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_food_recipe', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Category::class); //category_id
            $table->foreignIdFor(\App\Models\FoodRecipe::class); //food_recipe_id
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
        Schema::dropIfExists('category_food_recipe');
    }
}
