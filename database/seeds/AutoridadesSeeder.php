<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutoridadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autoridades')->insert([

            'email'=>'autoridad1@gmail.com'
        ]);
    }
}
