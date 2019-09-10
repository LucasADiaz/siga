<?php

use App\CategoriaMessage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        factory(CategoriaMessage::class, 47)->create();
    }
}
