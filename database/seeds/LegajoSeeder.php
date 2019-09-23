<?php

use App\Legajo;
use Illuminate\Database\Seeder;

class LegajoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Legajo::class, 300)->create();
    }
}
