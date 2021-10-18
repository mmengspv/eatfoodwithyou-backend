<?php

namespace Database\Seeders;

use App\Models\CookingProcess;
use Illuminate\Database\Seeder;

class CookingProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CookingProcess::factory(10)->create();
    }
}
