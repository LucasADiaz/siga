<?php

use App\Telefono;
use Illuminate\Database\Seeder;

class TelefonosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Telefono::class, 47)->create();
    }
}
