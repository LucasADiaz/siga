<?php

use App\Domicilio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DomiciliosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('domicilios')->insert([       //Carga de datos de pruebas
            'calle'=> 'Maipu ',
            'numero'=>'482',
            'cod_postal'=>'4700',
            'referencias'=>'Entre Av Belgrano y Peru',
            'piso'=>'2',
            'departamento'=>'1',
        ]);
        
        DB::table('domicilios')->insert([
            'calle'=> 'Junin',
            'numero'=>'594',
            'cod_postal'=>'4700',
            'referencias'=>'Entre Peru y Almagro',
            'piso'=>'3',
            'departamento'=>'2',
        ]);

        factory(Domicilio::class, 47)->create();
    }
}
