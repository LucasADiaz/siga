<?php

use App\Directivo;
use Illuminate\Database\Seeder;

class DirectivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Directivo::class,20)->create();
    }
}
