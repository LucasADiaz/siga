<?php

use App\Preceptor;
use Illuminate\Database\Seeder;

class PreceptorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Preceptor::class,20)->create();
    }
}
