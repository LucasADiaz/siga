<?php

use App\Notificacion;
use Illuminate\Database\Seeder;

class NotificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Notificacion::class, 47)->create();
    }
}
