<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->count(5)->create();

        $this->call([
            MahasiswaSeeder::class,
            MatakuliahSeeder::class,
        ]);
    }
}