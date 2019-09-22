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
        
        
        factory(Telefono::class, 47)->create();
    }
}
