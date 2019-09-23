<?php

use App\MateriaProfesor;
use Illuminate\Database\Seeder;

class MateriaProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MateriaProfesor::class, 150)->create();
    }
}
