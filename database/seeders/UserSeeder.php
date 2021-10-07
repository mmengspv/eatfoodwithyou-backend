<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('admin123');
        $admin->remember_token = Str::random(10);
        $admin->age = "20";
        $admin->gender = "MALE";
        $admin->role = "ADMIN";
        $admin->save();

        User::factory(5)->create();
    }
}
