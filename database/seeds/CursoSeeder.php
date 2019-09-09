<?php

use App\Curso;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('cursos')->insert([

        //     'nivel'=>
        // ])

        factory(Curso::class, 47)->create();
    }
}
