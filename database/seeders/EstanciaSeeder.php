<?php

namespace Database\Seeders;

use App\Models\Estancia;
use Illuminate\Database\Seeder;

class EstanciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estancia::factory()
            ->count(100)
            ->create();
    }
}
