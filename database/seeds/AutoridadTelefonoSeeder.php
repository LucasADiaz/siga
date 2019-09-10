<?php

use App\AutoridadTelefono;
use Illuminate\Database\Seeder;

class AutoridadTelefonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(AutoridadTelefono::class, 47)->create();
    }
}
