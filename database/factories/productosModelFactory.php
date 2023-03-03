<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\productosModel>
 */
class productosModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'producto' => fake()->randomElement(['sudadera','playera']),
            'talla' => fake()->randomElement(['xs','s','m','l']),
            'color' => fake()->colorName(),
            'genero' => fake()->randomElement(['dama','caballero']),
            'precio' => fake()->randomElement(['320','180']),
            'cantidadDisponible' => fake()->numberBetween($min = 0, $max = 50),
        ];
    }
}
