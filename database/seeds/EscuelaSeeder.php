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
        DB::table('escuelas')->insert([
            'id'=>'1',
            'nombre'=>'FRAY',
            'domicilio_id'=> '1',
            'telefono'=>'+54383154571346'

        ]);
        
        DB::table('escuelas')->insert([
            'id'=>'2',
            'nombre'=>'INDUSTRIAL',
            'domicilio_id'=> '2',
            'telefono'=>'+54383154571347'
            ]);

        //factory(Escuela::class, 47)->create();
    }
}