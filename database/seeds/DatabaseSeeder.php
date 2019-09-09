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
        $this->call(LegajoSeeder::class);  
        $this->call(DomicilioSeeder::class);          
        $this->call(PersonasSeeder::class);
        $this->call(TelefonosSeeder::class);
        $this->call(EscuelasSeeder::class); 
        $this->call(DiaActividadSeeder::class);  
        
    

        
    //     $this->call(CategoriaNotaSeeder::class);
    //     $this->call(CategoriaNotificacioneSeeder::class);
    //     $this->call(CursosSeeder::class);
    //     $this->call(AutoridadeSeeder::class);
    //     $this->call(DiaActividadSeeder::class);
    //     $this->call(DocumentosSeeder::class);        
    
    //     $this->call(InasistetenciaSeeder::class);
    //     $this->call(MateriaSeeder::class);
    //     $this->call(ModalidadeSeeder::class);
    //     $this->call(ModuloSeeder::class);
    //     $this->call(NotaSeeder::class);
    //     $this->call(NotificacioneSeeder::class);
    //     $this->call(PeriodoSeeder::class);
         
        
    //     $this->call(AlumnoEscuelaSeeder::class);
    //     $this->call(AlumnoSeeder::class);
    }




    
    // Es un metodo que se crea para que limpie las tablas
    // y tambien desactiva  luego activa las restriccion de la clave foranea
    protected function truncateTable(array $tables)
    {
        DB::statement('SET FOREING_KEY_CHECKS = 0');
        foreach ($tables as $table) 
        {
            DB::table($table)->truncate();  
        }
        DB::statement('SET FOREING_KEY_CHECKS = 1');
    }
}
