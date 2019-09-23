<?php

use App\Autoridad;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutoridadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        factory(Autoridad::class, 150)->create();
    }
}
