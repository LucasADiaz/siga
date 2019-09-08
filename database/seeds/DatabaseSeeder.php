<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\Array_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DomiciliosSeeder::class);
    }

    
    protected function truncateTable(array $tables)
    {
        DB::statement('SET FOREING_KEY_CHECKS = 0;');
        foreach ($tables as $table) 
        {
            DB::table($tables)->truncate();  
        }
        DB::statement('SET FOREING_KEY_CHECKS = 1;');
    }
}
