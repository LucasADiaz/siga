<?php

use App\TutorSuplente;
use Illuminate\Database\Seeder;

class TutorSuplenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TutorSuplente::class, 200)->create();
    }
}
