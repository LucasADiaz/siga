<?php

use App\Alumno;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('alumnos')->insert([

        //     'email'=>'johnnybarrionuevo5@gmail.com',
        //     'grupo_factor'=>'A+',

        // ]);

        factory(Alumno::class, 47)->create();
    }
}
