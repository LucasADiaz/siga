<?php

use App\Parentesco;
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
        $this->cargarSeedersSobre([
            'users',
            'legajos',
            'domicilios',
            'escuelas',
            'cursos',
            'dia_actividad_cursos',
            'personas',
            'telefonos',
            'autoridades',
            'categoria_notas',
            'categoria_messages',
            'modulos',
            'materias',
            'modalidades',
            'periodos',
            'alumnos',
            'messages',
            'notas',
            'inasistencias',
            'documentos',
            'profesores',
            'curso_materia',
            'materia_modulo',
            'materia_profesor',
            'preceptores',
            'directivos',
            'parentescos',
            'administrativos',
            'permissions',
            'roles',
            'role_has_permissions',
            'model_has_roles',
            'model_has_permissions',
            


        ]);
        //debemos llamar todos los seeder que creamos   
        
        $this->call(PermissionsSeeder::class);
        $this->call(UserSeeder::class);    

        $this->call(DomicilioSeeder::class);
        $this->call(EscuelaSeeder::class); 
        
        $this->call(PersonaSeeder::class);
        $this->call(AutoridadSeeder::class);
        $this->call(PreceptorSeeder::class);
        $this->call(AdministrativoSeeder::class);
        $this->call(DirectivoSeeder::class);
        
        $this->call(ResponsableSeeder::class); 
        $this->call(TelefonoSeeder::class);
        
        $this->call(CursoSeeder::class);
        $this->call(CategoriaMessageSeeder::class);
        $this->call(ModuloSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(CategoriaNotaSeeder::class);
        $this->call(DiaActividadSeeder::class);  

        $this->call(ModalidadSeeder::class);
        $this->call(PeriodoSeeder::class); 
        $this->call(AlumnoSeeder::class);
        $this->call(ParentescoSeeder::class);
        $this->call(LegajoSeeder::class);

        $this->call(MessageSeeder::class);
        $this->call(NotaSeeder::class);
        $this->call(InasistenciaSeeder::class);
        
        $this->call(DocumentoSeeder::class);      
        $this->call(ProfesorSeeder::class);      
        $this->call(MateriaModuloSeeder::class);      
        $this->call(MateriaProfesorSeeder::class);      
        $this->call(CursoMateriaSeeder::class); 

  
    
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
