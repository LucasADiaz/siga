<?php

use App\Escuela;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EscuelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Escuela::class)->create([
            'id'=>'1',
            'nombre'=>'FRAY',
            'telefono'=>'+54383154571346'
        ]);

        factory(Escuela::class)->create([
            'id'=>'2',
            'nombre'=>'INDUSTRIAL',
            'telefono'=>'+54383154571347'
        ]);
    }
}
