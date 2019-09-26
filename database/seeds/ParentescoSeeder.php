<?php

use App\Parentesco;
use Illuminate\Database\Seeder;

class ParentescoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Parentesco::class,200)->create();
    }
}
