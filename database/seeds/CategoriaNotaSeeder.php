<?php

use App\CategoriaNota;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaNotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  DB::table('categoria_notas')->insert([

        //      'nombre'=>'Conceptual',
        //  ]);

        //  DB::table('categoria_notas')->insert([

        //      'nombre'=>'primera prueba',
        //  ]);
        
        //  DB::table('categoria_notas')->insert([

        //      'nombre'=>'Carpeta completa',
        //  ]);
        


        factory(CategoriaNota::class, 47)->create();
    }

    
}
