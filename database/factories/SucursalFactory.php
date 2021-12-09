<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SucursalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'DireccionSucursal' => $this->faker->address(),
            'TelefonoSucursal' => $this->faker->phoneNumber(),
            'LatitudSucursal' => $this->faker->numberBetween(-100, 100),
            'AltitudSucursal' => $this->faker->numberBetween(-100, 100),
        ];
    }
}
