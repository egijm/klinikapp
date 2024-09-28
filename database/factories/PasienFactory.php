<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class pasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'No_Pasien' => $this->faker->unique()->randomNumber(5),
           'Nama' => $this->faker->name(),
           'Umur' => $this->faker-> numberBetween(20, 50),
           'Jenis_Kelamin' => $this->faker->randomElement(['laki-laki', 'perempuan']),
           'Alamat' => $this->faker->address(),
        ];
    }
}

