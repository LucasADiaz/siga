<?php

use App\Nota;
use Illuminate\Database\Seeder;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Nota::class, 247)->create();
    }
}
