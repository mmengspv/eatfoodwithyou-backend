<?php

namespace Database\Factories;

use App\Models\CookingProcess;
use Illuminate\Database\Eloquent\Factories\Factory;

class CookingProcessFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CookingProcess::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $photo = $this->faker->image('public/storage/cookingProcess',640,480, null, false);
        return [
            'process' => $this->faker->realText(30),
            'photo' => $photo,
            'photo_url' => "/storage/cookingProcess/" . $photo,
        ];
    }
}
