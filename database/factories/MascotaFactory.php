<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mascota>
 */
class MascotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->firstName(),
            'especie' => fake()->randomElement(['canino','felino']),
            'raza' => fake()->word(),
            'edad' => fake()->numberBetween(1,15),
            'genero' => fake()->randomElement(['hembra','macho']),
            'tamaño' => fake()->randomElement(['pequeño','mediano','grande']),
            'estado_salud' => fake()->randomElement(['buena','regular','excelente']),
            'fecha_ingreso' => fake()->date(),
            'estado' => fake()->randomElement(['disponible','adoptado']),
        ];
    }
}
