<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mascota;
use App\Models\Solicitud;
use App\Models\Solicitudes;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Mascota::factory(10)->create();

        Solicitud::factory(15)->create();
    }
}