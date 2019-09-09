<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([

            'email'=>'johnnybarrionuevo5@gmail.com',
            'grupo_factor'=>'A+',

        ]);
    }
}
