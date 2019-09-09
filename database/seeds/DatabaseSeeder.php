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
<<<<<<< Updated upstream
        $this->call(DomiciliosSeeder::class);
    }

    
=======
        //debemos llamar todos los seeder que creamos
        $this->call(LegajosSeeder::class);  
        $this->call(DomiciliosSeeder::class);          
        $this->call(PersonasSeeder::class);
        $this->call(TelefonosSeeder::class);
        $this->call(EscuelasSeeder::class); 
        $this->call(DiaActividadSeeder::class);  
        
    

        
    //     $this->call(CategoriaNotasSeeder::class);
    //     $this->call(CategoriaNotificacionesSeeder::class);
    //     $this->call(CursosSeeder::class);
    //     $this->call(AutoridadesSeeder::class);
    //     $this->call(DiaActividadSeeder::class);
    //     $this->call(DocumentosSeeder::class);        
    
    //     $this->call(InasistetenciasSeeder::class);
    //     $this->call(MateriasSeeder::class);
    //     $this->call(ModalidadesSeeder::class);
    //     $this->call(ModulosSeeder::class);
    //     $this->call(NotasSeeder::class);
    //     $this->call(NotificacionesSeeder::class);
    //     $this->call(PeriodosSeeder::class);
         
        
    //     $this->call(AlumnoEscuelaSeeder::class);
    //     $this->call(AlumnosSeeder::class);
    }




    
    // Es un metodo que se crea para que limpie las tablas
    // y tambien desactiva  luego activa las restriccion de la clave foranea
>>>>>>> Stashed changes
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
