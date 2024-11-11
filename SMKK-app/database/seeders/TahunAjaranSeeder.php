<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TahunAjaran;

class TahunAjaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Factory::factoryForModel(User::class)->count(100)->create();
        TahunAjaran::create([
            'tahun_pelajaran' => '2024/2025',
            'semester' => '2'
        ]);
    }
}
