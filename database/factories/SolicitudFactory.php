<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Solicitud>
 */
class SolicitudFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mascota_id' => \App\Models\Mascota::factory(),
            'nombre_solicitante' => fake()->name(),
            'correo_electronico' => fake()->safeEmail(),
            'telefono' => fake()->phoneNumber(),
            'direccion' => fake()->address(),
            'motivo_adopcion' => fake()->sentence(),
            'fecha_solicitud' => fake()->date(),
            'estado' => fake()->randomElement(['pendiente','aprobada','rechazada']),
        ];
    }
}
