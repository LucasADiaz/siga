<?php

use App\Autoridad;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutoridadeSeeder extends Seeder
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

        factory(Autoridad::class, 47)->create();
    }
}
