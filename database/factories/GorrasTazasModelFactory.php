<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GorrasTazasModel>
 */
class GorrasTazasModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'producto' => fake()->randomElement(['taza','gorra']),
            'precio' => fake()->randomElement(['60','70']),
            'cantidadDisponible' => fake()->numberBetween($min = 0, $max = 50),
        ];
    }
}
