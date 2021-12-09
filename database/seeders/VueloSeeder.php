<?php

namespace Database\Seeders;

use App\Models\Vuelo;
use Illuminate\Database\Seeder;

class VueloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vuelo::factory()
            ->count(20)
            ->create();
    }
}
