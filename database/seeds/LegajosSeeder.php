<?php

use App\Legajo;
use Illuminate\Database\Seeder;

class LegajosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Legajo::class, 47)->create();
    }
}
