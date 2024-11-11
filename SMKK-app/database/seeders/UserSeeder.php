<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Factory::factoryForModel(User::class)->count(10)->create();
        User::create([
            'username' => 'admin',
            'password' => bcrypt('password'),
            'role' => '1',
            'status' => true,
        ]);
    }
}
