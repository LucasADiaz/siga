<?php

use App\MateriaModulo;
use Illuminate\Database\Seeder;

class MateriaModuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MateriaModulo::class, 47)->create();
    }
}
