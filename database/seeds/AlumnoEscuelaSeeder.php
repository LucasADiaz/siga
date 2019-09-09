<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoEscuelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumno_escuelas')->insert([

            'fecha_ingreso'=>'2014-09-08',
            'fecha_salida'=>'2019-09-08',

        ]);
    }
}
