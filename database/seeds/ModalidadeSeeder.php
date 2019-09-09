<?php

use App\Modalidad;
use Illuminate\Database\Seeder;

class ModalidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Modalidad::class, 47)->create();
    }
}
