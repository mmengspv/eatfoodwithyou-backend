<?php

namespace Database\Factories;

use App\Models\Catagory;
use Illuminate\Database\Eloquent\Factories\Factory;

class CatagoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Catagory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->city() //ใส่ที่ชอบเลยจ้า
        ];
    }
}
