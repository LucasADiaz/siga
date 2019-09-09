<?php

use App\Escuela;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EscuelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre'=>'FRAY',
            'nombre'=>'INDUSTRIAL',


        ]);
        factory(Escuela::class, 47)->create();
    }
}
