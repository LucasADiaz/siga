<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaNotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria_notas')->insert([

            'nombre'=>'Conceptual',
        ]);

        DB::table('categoria_notas')->insert([

            'nombre'=>'primera prueba',
        ]);
        
        DB::table('categoria_notas')->insert([

            'nombre'=>'Carpeta completa',
        ]);
        
    }
}
