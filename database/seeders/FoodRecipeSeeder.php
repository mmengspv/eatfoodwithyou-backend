<?php

namespace Database\Seeders;

use App\Models\CookingProcess;
use App\Models\FoodRecipe;
use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class FoodRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FoodRecipe::factory(2)->hasIngredients(4)->hasCookingProcesses(4)->hasLikes(2)->hasComments(2)->create();
//        FoodRecipe::factory(10)->hasIngredients(3)->hasCookingProcesses(5)->create();
    }
}
