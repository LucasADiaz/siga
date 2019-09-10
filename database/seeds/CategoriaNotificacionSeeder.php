<?php

use App\CategoriaNotificacion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaNotificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('categoria_notificacions')->insert([


        //     'nombre'=>'AVISO GENERAL',
        //     'whatsapp'=>true,
        //     'email'=>false,
        //     'aplicacion'=>false,
        // ]);

        factory(CategoriaNotificacion::class, 47)->create();
    }
}
