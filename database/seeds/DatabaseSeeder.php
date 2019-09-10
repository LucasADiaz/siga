<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use PhpParser\Node\Expr\Cast\Array_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->cargarSeedersSobre(['legajos',
        'domicilios',
        'personas',
        'telefonos',
        'escuelas',
        'dia_actividad_cursos',
        ]);
        //debemos llamar todos los seeder que creamos
        $this->call(LegajoSeeder::class);  
        $this->call(DomicilioSeeder::class);          
        $this->call(EscuelaSeeder::class); 
        $this->call(CursoSeeder::class);
        
        $this->call(DiaActividadSeeder::class);  
        $this->call(PersonaSeeder::class);
        $this->call(TelefonoSeeder::class);
        
        $this->call(AutoridadSeeder::class);
        $this->call(CategoriaNotaSeeder::class);
        $this->call(CategoriaNotificacionSeeder::class);
        //funciona
        $this->call(ModuloSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(ModalidadSeeder::class);
        $this->call(PeriodoSeeder::class); 
        $this->call(AlumnoSeeder::class);
        $this->call(AlumnoEscuelaSeeder::class);
        
        // 
        $this->call(NotificacionSeeder::class);
        $this->call(InasistenciaSeeder::class);
        $this->call(AutoridadTelefonoSeeder::class);
        $this->call(NotaSeeder::class);
        
        $this->call(DocumentoSeeder::class);        
    }




    
    // Es un metodo que se crea para que limpie las tablas
    // y tambien desactiva  luego activa las restriccion de la clave foranea
    protected function cargarSeedersSobre(array $tablas){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');//desactivamos la revision de claves foraneas
        foreach($tablas as $tabla){
            DB::table($tabla)->truncate(); //LIMPIA LA TABLA cada vez que se ejecuta
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');//activamos la revision de claves foraneas
    }
}
