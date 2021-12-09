<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TuristaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NombresTurista' => $this->faker->firstName(),
            'ApellidosTurista' => $this->faker->lastName(),
            'DireccionTurista' => $this->faker->address(),
            'TelefonoTurista' => $this->faker->numerify('### ### ###')
        ];
    }
}
