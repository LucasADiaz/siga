<?php

use App\TrabajoPersona;
use Illuminate\Database\Seeder;

class TrabajoPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TrabajoPersona::class,200)->create();
    }
}
