<?php

use App\Inasistencia;
use Illuminate\Database\Seeder;

class InasistetenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Inasistencia::class, 47)->create();
    }
}
