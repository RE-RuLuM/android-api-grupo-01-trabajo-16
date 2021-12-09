<?php

namespace Database\Seeders;

use App\Models\ViajeContratado;
use Illuminate\Database\Seeder;

class ViajeContratadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ViajeContratado::factory()
            ->count(50)
            ->create();
    }
}
