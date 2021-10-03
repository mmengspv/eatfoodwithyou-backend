<?php

namespace Database\Factories;

use App\Models\FoodRecipe;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodRecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FoodRecipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'user_id' => User::factory(),
            'detail' => $this->faker->realText(30),
            'photo' => $this->faker->image('public/storage/foodRecipe',640,480, null, false)
        ];
    }
}
