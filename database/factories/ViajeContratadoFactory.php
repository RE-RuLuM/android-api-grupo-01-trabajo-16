<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ViajeContratadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $clases = ['Primera', 'Segunda', 'Tercera'];

        return [
            'Clase' => $clases[rand(0, 2)],
            'NumeroVuelo' => $this->faker->numberBetween(1, 20),
            'CodigoTuristas' => $this->faker->numberBetween(1, 50),
            'CodigoSucursal' => $this->faker->numberBetween(1, 10),
            'CodigoEstancia' => $this->faker->numberBetween(1, 100)
        ];
    }
}
