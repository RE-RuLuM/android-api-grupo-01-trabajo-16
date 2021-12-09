<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VueloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'FechaVuelo' => $this->faker->date(),
            'HoraVuelo' => $this->faker->time(),
            'OrigenVuelo' => $this->faker->city(),
            'DestinoVuelo' => $this->faker->city(),
            'PlazasTotales' => $this->faker->numberBetween(150, 200),
        ];
    }
}
