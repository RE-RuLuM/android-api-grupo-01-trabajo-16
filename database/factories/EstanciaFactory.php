<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EstanciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Pension' => $this->faker->numerify('###'),
            'FechaEntrada' => $this->faker->date(),
            'FechaSalida' => $this->faker->date(),
            'CodigoHotel' => $this->faker->numberBetween(1, 20)
        ];
    }
}
