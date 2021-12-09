<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NombreHotel' => $this->faker->company(),
            'DireccionHotel' => $this->faker->address(),
            'CiudadHotel' => $this->faker->city(),
            'TelefonoHotel' => $this->faker->numerify('#########'),
            'PlazasHotel' => $this->faker->numberBetween(30, 50),
            'FotoHotel' => $this->faker->filePath(),
        ];
    }
}
