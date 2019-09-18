<?php

use App\Telefono;
use Illuminate\Database\Seeder;

class TelefonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('telefonos')->insert([
            'numero'=>'+5493834545986',
            'categoria'=>'Movil'
            ]);
        DB::table('telefonos')->insert([
            'numero'=>'+5493834578983',
            'categoria'=>'Movil'
            ]);
        DB::table('telefonos')->insert([
            'numero'=>'+5493834756323',
            'categoria'=>'Movil'
            ]);
        DB::table('telefonos')->insert([
            'numero'=>'+5493834772459',
            'categoria'=>'Movil'
            ]);
        // factory(Telefono::class, 47)->create();
    }
}
