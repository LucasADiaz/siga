<?php

use App\DiaActividadCurso;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiaActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DiaActividadCurso::class, 47)->create();
    }
}
