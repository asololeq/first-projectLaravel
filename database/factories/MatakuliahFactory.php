<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatakuliahFactory extends Factory
{
    public function definition(): array
    {
        return [
            'dosen_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'kode_mk' => fake()->unique()->bothify('MK###'),
            'nama_mk' => fake()->words(2, true),
            'sks' => fake()->numberBetween(1, 4),
            'semester' => fake()->numberBetween(1, 8),
        ];
    }
}
