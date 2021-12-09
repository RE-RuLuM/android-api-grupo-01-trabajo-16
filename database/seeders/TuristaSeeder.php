<?php

namespace Database\Seeders;

use App\Models\Turista;
use Illuminate\Database\Seeder;

class TuristaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Turista::factory()
            ->count(50)
            ->create();
    }
}
