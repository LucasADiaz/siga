<?php

use App\CursoMateria;
use Illuminate\Database\Seeder;

class CursoMateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CursoMateria::class, 47)->create();//
    }
}
