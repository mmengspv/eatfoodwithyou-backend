<?php

namespace Database\Seeders;
use App\Models\Catagory;
use Illuminate\Database\Seeder;


class CatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catagory::factory(10)->create();
    }
}
