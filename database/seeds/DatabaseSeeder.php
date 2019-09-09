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
        //debemos llamar todos los seeder que creamos
        $this->call(DomiciliosSeeder::class);
        $this->call(AlumnosSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(MateriasSeeder::class);
        $this->call(PersonasSeeder::class);
        $this->call(TelefonosSeeder::class);
        $this->call(AlumnoEscuelaSeeder::class);
        // $this->call(DomiciliosSeeder::class);
        // $this->call(DomiciliosSeeder::class);
    }



    // Es un metodo que se crea para que limpie las tablas
    // y tambien desactiva  luego activa las restriccion de la clave foranea
    protected function truncateTable(array $tables)
    {
        DB::statement('SET FOREING_KEY_CHECKS = 0;');// desactiva las claves foraneas
        foreach ($tables as $table) 
        {
            DB::table($tables)->truncate();  //limpia todas las tablas 
        }
        DB::statement('SET FOREING_KEY_CHECKS = 1;');//activa clave foranea
    }
}
