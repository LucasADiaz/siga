<?php

namespace App\Http\Controllers;

use View;
//use Redirect;
use Illuminate\Http\Request;
use App\Legajo;
use App\User;
use App\Autoridad;
use App\Alumno;
use App\Persona;
use App\Domicilio;
use App\Parentesco;
use App\Telefono;
use App\TrabajoPersona;
use App\TutorSuplente;
use Illuminate\Support\Facades\Hash;
use jsPDF;

class LegajosController extends Controller
{
    

    public function index()
    {
        
    }



    public function show()
    {           
        return view('legajos.crearLegajos.crearlegajo');
    }


    public function legajoCreado()
    {
        return view('legajos.crearLegajos.legajoCreado');
    }
  
    public function store(Request $request)
    {
        
     //Creamos el alumno (domicilio, persona, alumno, usuario, telefonos)
     $domicilio_alu = Domicilio::create([
        'calle' => $request->calle_alu,
        'numero' => $request->num_calle_alu,
        'cod_postal' => $request->cod_postal_alu,
        'localidad' => $request->localidad_alu,
        'departamento' => $request->num_depto_alu,
    
     ]);
    $domicilio_alu->save();
    
    $persona_alu = Persona::create([
     
        'nombre' => $request->nombres_alu,
        'apellido' => $request->apellidos_alu,
        'fecha_nacimiento' => $request->fec_nac_alu,
        'lugar_nacimiento' => $request->lugar_nac_alu,
        'sexo'=> $request->sexo_alu,
        'tipo_nro_doc'=> $request->tipo_doc_alu,
        'nro_doc' => $request->num_doc_alu,
        'nacionalidad' => $request->nacionalidad_alu,
        'domicilio_id' =>$domicilio_alu->id,
        'email' => $request->email_alu,
        'profesion' => 'Estudiante',
        
       ]);
    $persona_alu->save();
    
    $alumno = Alumno::create([
     'persona_id' =>$persona_alu->id, 
     'escuela_procedencia' => $request->esc_procedencia_alu,
     'curso_id' => '1',
     'grupo_factor' =>$request->grupo_factor_alu,
    ]);
    $alumno->save();
    
    $user = User::create([ 
     'name' => $request->nombres_alu.$request->apellidos_alu,
     'email'=> $request->email_alu,
     'username'=>$request->num_doc_alu,
     'password'=>Hash::make($request->num_doc_alu),
     
    ]);
    $user->save();
    
    $telefono_alu = Telefono::create([ 
     'persona_id' => $persona_alu->id, 
     'numero'=> $request->tel1_alu,
     'categoria'=>'Personal1',
     
    ]);
    $telefono_alu->save();
    
    if(empty($request->tel2_alu)){
     
    }else{
     $telefono2_alu = Telefono::create([ 
         'persona_id' => $persona_alu->id, 
         'numero'=> $request->tel2_alu,
         'categoria'=>'Personal2',
         
     ]);
     $telefono2_alu->save();
    }
    //Preguntamos si la madre esta fallecida
    if($request->madre_fallecida){
    
        //Casos con madre fallecida
        if($request->padre_fallecido){
            //Caso 1 - Padre fallecido
            if($request->tutor_mismodomicilio){
                $domicilio_tutor = $domicilio_alu;
            }else{
                    $domicilio_tutor = Domicilio::create([
                        'calle' => $request->calle_tutor,
                        'numero' => $request->num_calle_tutor,
                        'cod_postal' => $request->cod_postal_tutor,
                        'localidad' => $request->localidad_tutor,
                        'departamento' => $request->num_depto_tutor,
                    ]);
                    }
    
                    $domicilio_tutor->save();
                
                    $persona_tutor = Persona::create([
                    
                    'nombre' => $request->nombres_tutor,
                    'apellido' => $request->apellidos_tutor,
                    'fecha_nacimiento' => $request->fec_nac_tutor,
                    'lugar_nacimiento' => $request->lugar_nac_tutor,
                    'sexo'=> $request->sexo_tutor,
                    'tipo_nro_doc'=> $request->tipo_doc_alu,
                    'nro_doc' => $request->num_doc_tutor,
                    'nacionalidad' => $request->nacionalidad_tutor,
                    'profesion' => $request->profesion_tutor,
                    'email' => $request->email_tutor,
                    'domicilio_id' =>$domicilio_tutor->id,
                    
                    
                ]);
                $persona_tutor->save();
    
                $telefono_tutor = Telefono::create([ 
                    'persona_id' => $persona_tutor->id, 
                    'numero'=> $request->tel1_tutor,
                    'categoria'=>'Personal1',
                    
                ]);
                $telefono_tutor->save();
    
                if(empty($request->tel2_tutor)){
                        
                }else{
                    $telefono2_tutor = Telefono::create([ 
                        'persona_id' => $persona_tutor->id, 
                        'numero'=> $request->tel2_tutor,
                        'categoria'=>'Personal2',
                        
                    ]);
                    $telefono2_tutor->save();
                }
    
                if($request->tutor_no_trabaja){
                    
                }else{
                    $domicilio_lab_tutor = Domicilio::create([
                        'calle' => $request->calle_lab_tutor,
                        'numero' => $request->num_calle_lab_tutor,
                        'cod_postal' => $request->cod_postal_lab_tutor,
                        'localidad' => $request->localidad_lab_tutor,
                        'departamento' => $request->num_depto_lab_tutor,
                    ]);
                    $domicilio_lab_tutor->save();
    
    
    
                $telefono_lab_tutor = Telefono::create([ 
                    'persona_id' => $persona_tutor->id, 
                    'numero' => $request->tel_lab_tutor,
                    'categoria'=>'Laboral',
                    
                ]);
                $telefono_lab_tutor->save();
    
                $trabajo_tutor = TrabajoPersona::create([
                    'persona_id' =>$persona_tutor->id, 
                    'domicilio_trabajo_id' =>$domicilio_lab_tutor->id,
                    'lugar_trabajo' => $request->lugar_trabajo_tutor,
                ]);
                $trabajo_tutor->save();
                }
                
                $parentesco_tutor = Parentesco::create([
                    'persona_id' =>$persona_tutor->id, 
                    'alumno_id' => $alumno->id,
                    'parentesco' => $request->parentesco_tutor,
                ]);
                $parentesco_tutor->save();
    
                $autoridad_tutor = Autoridad::create([
                    'persona_id' =>$persona_tutor->id, 
                    'user_id' => $user->id,
                ]);
                $autoridad_tutor->save(); 
    
                $legajo_alumno = Legajo::create([
                    'alumno_id' =>$alumno->id, 
                    'tutor_id' =>$autoridad_tutor->id,
                    ]);
                $legajo_alumno->save(); 
                }
                else{
                    //Caso 2 - Con padre vivo
            if($request->padre_mismodomicilio){
                $domicilio_padre = $domicilio_alu;
            }else{
                $domicilio_padre = Domicilio::create([
                    'calle' => $request->calle_padre,
                    'numero' => $request->num_calle_padre,
                    'cod_postal' => $request->cod_postal_padre,
                    'localidad' => $request->localidad_padre,
                    'departamento' => $request->num_depto_padre,
                ]);
                
                }
                $domicilio_padre->save();
                $persona_padre = Persona::create([
                'nombre' => $request->nombres_padre,
                'apellido' => $request->apellidos_padre,
                'fecha_nacimiento' => $request->fec_nac_padre,
                'lugar_nacimiento' => $request->lugar_nac_padre,
                'email' => $request->email_padre,
                'profesion' => $request->profesion_padre,
                'sexo'=> $request->sexo_padre,
                'tipo_nro_doc'=> $request->tipo_doc_alu,
                'nro_doc' => $request->num_doc_padre,
                'nacionalidad' => $request->nacionalidad_padre,
                'domicilio_id' =>$domicilio_padre->id,
                ]);
                $persona_padre->save();
    
                $telefono_padre = Telefono::create([ 
                'persona_id' => $persona_padre->id, 
                'numero'=> $request->tel1_padre,
                'categoria'=>'Personal1',
                    
                ]);
                $telefono_padre->save();
    
                if(empty($request->tel2_padre)){
                        
                }else{
                    $telefono2_padre = Telefono::create([ 
                        'persona_id' => $persona_padre->id, 
                        'numero'=> $request->tel2_padre,
                        'categoria'=>'Personal2',
                        
                    ]);
                    $telefono2_padre->save();
                }
    
                if($request->padre_no_trabaja){
                    
                }else{
                    $domicilio_lab_padre = Domicilio::create([
                        'calle' => $request->calle_lab_padre,
                        'numero' => $request->num_calle_lab_padre,
                        'cod_postal' => $request->cod_postal_lab_padre,
                        'localidad' => $request->localidad_lab_padre,
                        'departamento' => $request->num_depto_lab_padre,
                    ]);
                    $domicilio_lab_padre->save();
    
    
    
                $telefono_lab_padre = Telefono::create([ 
                    'persona_id' => $persona_padre->id, 
                    'numero' => $request->tel_lab_padre,
                    'categoria'=>'Laboral',
                    
                ]);
                $telefono_lab_padre->save();
    
    
                }
                $trabajo_padre = TrabajoPersona::create([
                    'persona_id' =>$persona_padre->id, 
                    'lugar_trabajo' => $request->lugar_trabajo_padre,
                    'domicilio_trabajo_id' => $domicilio_lab_padre->id
                ]);
                $trabajo_padre->save();
                $parentesco_padre = Parentesco::create([
                    'persona_id' =>$persona_padre->id, 
                    'alumno_id' => $alumno->id,
                    'parentesco' => 'Padre',
                ]);
                $parentesco_padre->save();
    
                if($request->padre_es_tutor){
    
                $autoridad_tutor = Autoridad::create([
                    'persona_id' =>$persona_padre->id, 
                    'user_id' => $user->id,
                ]);
                $autoridad_tutor->save(); 
    
                $legajo_alumno = Legajo::create([
                    'alumno_id' =>$alumno->id, 
                    'padre_id' =>$persona_padre->id, 
                    'tutor_id' =>$autoridad_tutor->id,
                ]);
                }else{
                    if($request->tutor_mismodomicilio){
                        $domicilio_tutor = $domicilio_alu;
                    }else{
                $domicilio_tutor = Domicilio::create([
                    'calle' => $request->calle_tutor,
                    'numero' => $request->num_calle_tutor,
                    'cod_postal' => $request->cod_postal_tutor,
                    'localidad' => $request->localidad_tutor,
                    'departamento' => $request->num_depto_tutor,
                 ]);
                }
            
                $domicilio_tutor->save();
             
                $persona_tutor = Persona::create([
                 
                 'nombre' => $request->nombres_tutor,
                 'apellido' => $request->apellidos_tutor,
                 'fecha_nacimiento' => $request->fec_nac_tutor,
                 'lugar_nacimiento' => $request->lugar_nac_tutor,
                 'sexo'=> $request->sexo_tutor,
                 'tipo_nro_doc'=> $request->tipo_doc_alu,
                 'nro_doc' => $request->num_doc_tutor,
                 'nacionalidad' => $request->nacionalidad_tutor,
                 'email' => $request->email_tutor,
                 'profesion' => $request->profesion_tutor,
                 'domicilio_id' =>$domicilio_tutor->id,
                 
             ]);
             $persona_tutor->save();
            
             $telefono_tutor = Telefono::create([ 
                 'persona_id' => $persona_tutor->id, 
                 'numero'=> $request->tel1_tutor,
                 'categoria'=>'Personal1',
                 
             ]);
             $telefono_tutor->save();
            
             if(empty($request->tel2_tutor)){
                    
            }else{
                $telefono2_tutor = Telefono::create([ 
                    'persona_id' => $persona_tutor->id, 
                    'numero'=> $request->tel2_tutor,
                    'categoria'=>'Personal2',
                    
                ]);
                $telefono2_tutor->save();
            }
            
            if($request->tutor_no_trabaja){
                
            }else{
                $domicilio_lab_tutor = Domicilio::create([
                    'calle' => $request->calle_lab_tutor,
                    'numero' => $request->num_calle_lab_tutor,
                    'cod_postal' => $request->cod_postal_lab_tutor,
                    'localidad' => $request->localidad_lab_tutor,
                    'departamento' => $request->num_depto_lab_tutor,
                 ]);
                $domicilio_lab_tutor->save();
            
            
            
            $telefono_lab_tutor = Telefono::create([ 
                 'persona_id' => $persona_tutor->id, 
                 'numero' => $request->tel_lab_tutor,
                 'categoria'=>'Laboral',
                 
             ]);
             $telefono_lab_tutor->save();
            
            }
        
            $trabajo_tutor = TrabajoPersona::create([
                'persona_id' =>$persona_tutor->id, 
                'domicilio_trabajo_id' => $domicilio_lab_padre->id,
                'lugar_trabajo' => $request->lugar_trabajo_tutor,
            ]);
            $trabajo_tutor->save();
    
            $parentesco_tutor = Parentesco::create([
                'persona_id' =>$persona_tutor->id, 
                'alumno_id' => $alumno->id,
                'parentesco' => $request->parentesco_tutor,
            ]);
            $parentesco_tutor->save();
            
            $autoridad_tutor = Autoridad::create([
                'persona_id' =>$persona_tutor->id, 
                'user_id' => $user->id,
            ]);
            $autoridad_tutor->save(); 
              
            $legajo_alumno = Legajo::create([
                'alumno_id' =>$alumno->id, 
                'padre_id' =>$persona_padre->id, 
                'tutor_id' =>$autoridad_tutor->id,
            ]);
            $legajo_alumno->save();
            }
                }
    }else{
        
        //Casos con madre viva
        //Creamos a la madre
        if($request->madre_mismodomicilio){
            $domicilio_madre = $domicilio_alu;
        }else{
                $domicilio_madre = Domicilio::create([
                    'calle' => $request->calle_madre,
                    'numero' => $request->num_calle_madre,
                    'cod_postal' => $request->cod_postal_madre,
                    'localidad' => $request->localidad_madre,
                    'departamento' => $request->num_depto_madre,
                ]);
                }
                $domicilio_madre->save();
                $persona_madre = Persona::create([
                'nombre' => $request->nombres_madre,
                'apellido' => $request->apellidos_madre,
                'fecha_nacimiento' => $request->fec_nac_madre,
                'lugar_nacimiento' => $request->lugar_nac_madre,
                'sexo'=> $request->sexo_madre,
                'email'=> $request->email_madre,
                'profesion'=> $request->profesion_madre,
                'tipo_nro_doc'=> $request->tipo_doc_alu,
                'nro_doc' => $request->num_doc_madre,
                'nacionalidad' => $request->nacionalidad_madre,
                'domicilio_id' =>$domicilio_madre->id,
                ]);
                $persona_madre->save();
    
                $telefono_madre = Telefono::create([ 
                'persona_id' => $persona_madre->id, 
                'numero'=> $request->tel1_madre,
                'categoria'=>'Personal1',
                ]);
                $telefono_madre->save();
    
                if(empty($request->tel2_madre)){
                    
                }else{
                $telefono2_madre = Telefono::create([ 
                    'persona_id' => $persona_madre->id, 
                    'numero'=> $request->tel2_madre,
                    'categoria'=>'Personal2',
                    
                ]);
                $telefono2_madre->save();
                }
    
                if($request->madre_no_trabaja){
    
                }else{
                $domicilio_lab_madre = Domicilio::create([
                    'calle' => $request->calle_lab_madre,
                    'numero' => $request->num_calle_lab_madre,
                    'cod_postal' => $request->cod_postal_lab_madre,
                    'localidad' => $request->localidad_lab_madre,
                    'departamento' => $request->num_depto_lab_madre,
                ]);
                $domicilio_lab_madre->save();
    
    
    
                $telefono_lab_madre = Telefono::create([ 
                'persona_id' => $persona_madre->id, 
                'numero' => $request->tel_lab_madre,
                'categoria'=>'Laboral',
                
                ]);
                $telefono_lab_madre->save();
                $trabajo_madre = TrabajoPersona::create([
                    'persona_id' =>$persona_madre->id, 
                    'domicilio_trabajo_id' =>$domicilio_lab_madre->id, 
                    'lugar_trabajo' => $request->lugar_trabajo_madre,
                    ]);
                    $trabajo_madre->save();
                }
                
    
                $parentesco_madre = Parentesco::create([
                'persona_id' =>$persona_madre->id, 
                'alumno_id' => $alumno->id,
                'parentesco' => 'Madre',
                ]);
                $parentesco_madre->save();
    
        if($request->padre_fallecido){
            //Caso 3 con padre fallecido
                                    if($request->madre_es_tutor){
                                        $autoridad_tutor = Autoridad::create([
                                            'persona_id' =>$persona_madre->id, 
                                            'user_id' => $user->id,
                                        ]);
                                        $autoridad_tutor->save(); 
                                          
                                        $legajo_alumno = Legajo::create([
                                            'alumno_id' =>$alumno->id, 
                                            'madre_id' =>$persona_madre->id, 
                                            'tutor_id' =>$autoridad_tutor->id,
                                        ]);
                                        $legajo_alumno->save();
                                    }else{
                                        if($request->tutor_mismodomicilio){
                                            $domicilio_tutor = $domicilio_alu;
                                        }else{
                                    $domicilio_tutor = Domicilio::create([
                                        'calle' => $request->calle_tutor,
                                        'numero' => $request->num_calle_tutor,
                                        'cod_postal' => $request->cod_postal_tutor,
                                        'localidad' => $request->localidad_tutor,
                                        'departamento' => $request->num_depto_tutor,
                                    ]);
                                    }
        
                                    $domicilio_tutor->save();
                                
                                    $persona_tutor = Persona::create([
                                    
                                    'nombre' => $request->nombres_tutor,
                                    'apellido' => $request->apellidos_tutor,
                                    'fecha_nacimiento' => $request->fec_nac_tutor,
                                    'lugar_nacimiento' => $request->lugar_nac_tutor,
                                    'sexo'=> $request->sexo_tutor,
                                    'tipo_nro_doc'=> $request->tipo_doc_alu,
                                    'nro_doc' => $request->num_doc_tutor,
                                    'nacionalidad' => $request->nacionalidad_tutor,
                                    'profesion' => $request->profesion_tutor,
                                    'email' => $request->email_tutor,
                                    'domicilio_id' =>$domicilio_tutor->id,
                                    
                                ]);
                                $persona_tutor->save();
        
                                $telefono_tutor = Telefono::create([ 
                                    'persona_id' => $persona_tutor->id, 
                                    'numero'=> $request->tel1_tutor,
                                    'categoria'=>'Personal1',
                                    
                                ]);
                                $telefono_tutor->save();
        
                                if(empty($request->tel2_tutor)){
                                        
                                }else{
                                    $telefono2_tutor = Telefono::create([ 
                                        'persona_id' => $persona_tutor->id, 
                                        'numero'=> $request->tel2_tutor,
                                        'categoria'=>'Personal2',
                                        
                                    ]);
                                    $telefono2_tutor->save();
                                }
        
                                if($request->tutor_no_trabaja){
                                    
                                }else{
                                    $domicilio_lab_tutor = Domicilio::create([
                                        'calle' => $request->calle_lab_tutor,
                                        'numero' => $request->num_calle_lab_tutor,
                                        'cod_postal' => $request->cod_postal_lab_tutor,
                                        'localidad' => $request->localidad_lab_tutor,
                                        'departamento' => $request->num_depto_lab_tutor,
                                    ]);
                                    $domicilio_lab_tutor->save();
        
        
        
                                $telefono_lab_tutor = Telefono::create([ 
                                    'persona_id' => $persona_tutor->id, 
                                    'numero' => $request->tel_lab_tutor,
                                    'categoria'=>'Laboral',
                                    
                                ]);
                                $telefono_lab_tutor->save();
        
                            }
                            $trabajo_tutor = TrabajoPersona::create([
                                'persona_id' =>$persona_tutor->id,
                                'domicilio_trabajo_id' => $domicilio_lab_tutor->id,
                                'lugar_trabajo' => $request->lugar_trabajo_tutor,
                            ]);
                            $trabajo_tutor->save();
                                $parentesco_tutor = Parentesco::create([
                                    'persona_id' =>$persona_tutor->id, 
                                    'alumno_id' => $alumno->id,
                                    'parentesco' => $request->parentesco_tutor,
                                ]);
                                $parentesco_tutor->save();
        
                                $autoridad_tutor = Autoridad::create([
                                    'persona_id' =>$persona_tutor->id, 
                                    'user_id' => $user->id,
                                ]);
                                $autoridad_tutor->save(); 
                                  
                                $legajo_alumno = Legajo::create([
                                    'alumno_id' =>$alumno->id, 
                                    'madre_id' =>$persona_madre->id, 
                                    'tutor_id' =>$autoridad_tutor->id,
                                ]);
                                $legajo_alumno->save();
                                    }
            
                            }
        else{
            //Caso 4 con padre vivo
            if($request->padre_mismodomicilio){
                $domicilio_padre = $domicilio_alu;
            }else{
                $domicilio_padre = Domicilio::create([
                    'calle' => $request->calle_padre,
                    'numero' => $request->num_calle_padre,
                    'cod_postal' => $request->cod_postal_padre,
                    'localidad' => $request->localidad_padre,
                    'departamento' => $request->num_depto_padre,
                ]);
                
                }
                $domicilio_padre->save();
    
                
            
                $persona_padre = Persona::create([
                
                'nombre' => $request->nombres_padre,
                'apellido' => $request->apellidos_padre,
                'fecha_nacimiento' => $request->fec_nac_padre,
                'lugar_nacimiento' => $request->lugar_nac_padre,
                'sexo'=> $request->sexo_padre,
                'tipo_nro_doc'=> $request->tipo_doc_alu,
                'nro_doc' => $request->num_doc_padre,
                'nacionalidad' => $request->nacionalidad_padre,
                'profesion' => $request->profesion_padre,
                'email' => $request->email_padre,
                'domicilio_id' =>$domicilio_padre->id,
                
                ]);
                $persona_padre->save();
    
                $telefono_padre = Telefono::create([ 
                    'persona_id' => $persona_padre->id, 
                    'numero'=> $request->tel1_padre,
                    'categoria'=>'Personal1',
                    
                ]);
                $telefono_padre->save();
    
                if(empty($request->tel2_padre)){
                        
                }else{
                    $telefono2_padre = Telefono::create([ 
                        'persona_id' => $persona_padre->id, 
                        'numero'=> $request->tel2_padre,
                        'categoria'=>'Personal2',
                        
                    ]);
                    $telefono2_padre->save();
                }
    
                if($request->padre_no_trabaja){
                    
                }else{
                    $domicilio_lab_padre = Domicilio::create([
                        'calle' => $request->calle_lab_padre,
                        'numero' => $request->num_calle_lab_padre,
                        'cod_postal' => $request->cod_postal_lab_padre,
                        'localidad' => $request->localidad_lab_padre,
                        'departamento' => $request->num_depto_lab_padre,
                    ]);
                    $domicilio_lab_padre->save();
    
    
    
                $telefono_lab_padre = Telefono::create([ 
                    'persona_id' => $persona_padre->id, 
                    'numero' => $request->tel_lab_padre,
                    'categoria'=>'Laboral',
                    
                ]);
                $telefono_lab_padre->save();
    
    
                }
                $trabajo_padre = TrabajoPersona::create([
                    'persona_id' =>$persona_padre->id, 
                    'domicilio_trabajo_id' => $domicilio_lab_padre->id,
                    'lugar_trabajo' => $request->lugar_trabajo_padre,
                ]);
                $trabajo_padre->save();
                $parentesco_padre = Parentesco::create([
                    'persona_id' =>$persona_padre->id, 
                    'alumno_id' => $alumno->id,
                    'parentesco' => 'Padre',
                ]);
                $parentesco_padre->save();
    
                
                if($request->padre_es_tutor){
                    $autoridad_tutor = Autoridad::create([
                        'persona_id' =>$persona_padre->id, 
                        'user_id' => $user->id,
                    ]);
                    $autoridad_tutor->save(); 
        
                    $legajo_alumno = Legajo::create([
                        'alumno_id' =>$alumno->id, 
                        'padre_id' =>$persona_padre->id, 
                        'madre_id' =>$persona_madre->id, 
                        'tutor_id' =>$autoridad_tutor->id,
                        ]);
                    $legajo_alumno->save(); 
                }else if($request->madre_es_tutor){
                    $autoridad_tutor = Autoridad::create([
                        'persona_id' =>$persona_madre->id, 
                        'user_id' => $user->id,
                    ]);
                    $autoridad_tutor->save(); 
        
                    $legajo_alumno = Legajo::create([
                        'alumno_id' =>$alumno->id, 
                        'madre_id' =>$persona_madre->id, 
                        'padre_id' =>$persona_padre->id, 
                        'tutor_id' =>$autoridad_tutor->id,
                        ]);
                    $legajo_alumno->save();
                }
                else{
                    if($request->tutor_mismodomicilio){
                        $domicilio_tutor = $domicilio_alu;
                    }else{
                            $domicilio_tutor = Domicilio::create([
                                'calle' => $request->calle_tutor,
                                'numero' => $request->num_calle_tutor,
                                'cod_postal' => $request->cod_postal_tutor,
                                'localidad' => $request->localidad_tutor,
                                'departamento' => $request->num_depto_tutor,
                            ]);
                            }
            
                            $domicilio_tutor->save();
                        
                            $persona_tutor = Persona::create([
                            
                            'nombre' => $request->nombres_tutor,
                            'apellido' => $request->apellidos_tutor,
                            'fecha_nacimiento' => $request->fec_nac_tutor,
                            'lugar_nacimiento' => $request->lugar_nac_tutor,
                            'sexo'=> $request->sexo_tutor,
                            'email'=> $request->email_tutor,
                            'profesion'=> $request->profesion_tutor,
                            'tipo_nro_doc'=> $request->tipo_doc_alu,
                            'nro_doc' => $request->num_doc_tutor,
                            'nacionalidad' => $request->nacionalidad_tutor,
                            'email'=> $request->email_tutor,
                            'profesion'=> $request->profesion_tutor,
                            'domicilio_id' =>$domicilio_tutor->id,
                            
                        ]);
                        $persona_tutor->save();
            
                        $telefono_tutor = Telefono::create([ 
                            'persona_id' => $persona_tutor->id, 
                            'numero'=> $request->tel1_tutor,
                            'categoria'=>'Personal1',
                            
                        ]);
                        $telefono_tutor->save();
            
                        if(empty($request->tel2_tutor)){
                                
                        }else{
                            $telefono2_tutor = Telefono::create([ 
                                'persona_id' => $persona_tutor->id, 
                                'numero'=> $request->tel2_tutor,
                                'categoria'=>'Personal2',
                                
                            ]);
                            $telefono2_tutor->save();
                        }
            
                        if($request->tutor_no_trabaja){
                            
                        }else{
                            $domicilio_lab_tutor = Domicilio::create([
                                'calle' => $request->calle_lab_tutor,
                                'numero' => $request->num_calle_lab_tutor,
                                'cod_postal' => $request->cod_postal_lab_tutor,
                                'localidad' => $request->localidad_lab_tutor,
                                'departamento' => $request->num_depto_lab_tutor,
                            ]);
                            $domicilio_lab_tutor->save();
            
            
            
                        $telefono_lab_tutor = Telefono::create([ 
                            'persona_id' => $persona_tutor->id, 
                            'numero' => $request->tel_lab_tutor,
                            'categoria'=>'Laboral',
                            
                        ]);
                        $telefono_lab_tutor->save();
            
                        }
            
                        $trabajo_tutor = TrabajoPersona::create([
                            'persona_id' =>$persona_tutor->id, 
                            'lugar_trabajo' => $request->lugar_trabajo_tutor,
                            'domicilio_trabajo_id' =>$domicilio_lab_tutor->id, 
                        ]);
                        $trabajo_tutor->save();
                        $parentesco_tutor = Parentesco::create([
                            'persona_id' =>$persona_tutor->id, 
                            'alumno_id' => $alumno->id,
                            'parentesco' => $request->parentesco_tutor,
                        ]);
                        $parentesco_tutor->save();
            
                        $autoridad_tutor = Autoridad::create([
                            'persona_id' =>$persona_tutor->id, 
                            'user_id' => $user->id,
                        ]);
                        $autoridad_tutor->save(); 
            
                        $legajo_alumno = Legajo::create([
                            'alumno_id' =>$alumno->id, 
                            'padre_id' =>$persona_padre->id,
                            'madre_id' =>$persona_madre->id,  
                            'tutor_id' =>$autoridad_tutor->id,
                            ]);
                        $legajo_alumno->save(); 
                }
        }
        
        
    }

    if(!$request->padre_fallecido && !$request->madre_fallecida){

        if(!$request->padre_es_tutor && !$request->madre_es_tutor){
            if($request->tutor_mismodomicilio){
                $domicilio_tutor = $domicilio_alu;
            }else{
                    $domicilio_tutor = Domicilio::create([
                        'calle' => $request->calle_tutor,
                        'numero' => $request->num_calle_tutor,
                        'cod_postal' => $request->cod_postal_tutor,
                        'localidad' => $request->localidad_tutor,
                        'departamento' => $request->num_depto_tutor,
                    ]);
                    }
    
                    $domicilio_tutor->save();
                
                    $persona_tutor = Persona::create([
                    
                    'nombre' => $request->nombres_tutor,
                    'apellido' => $request->apellidos_tutor,
                    'fecha_nacimiento' => $request->fec_nac_tutor,
                    'lugar_nacimiento' => $request->lugar_nac_tutor,
                    'sexo'=> $request->sexo_tutor,
                    'email'=> $request->email_tutor,
                    'profesion'=> $request->profesion_tutor,
                    'tipo_nro_doc'=> $request->tipo_doc_alu,
                    'nro_doc' => $request->num_doc_tutor,
                    'nacionalidad' => $request->nacionalidad_tutor,
                    'email'=> $request->email_tutor,
                    'profesion'=> $request->profesion_tutor,
                    'domicilio_id' =>$domicilio_tutor->id,
                    
                ]);
                $persona_tutor->save();
    
                $telefono_tutor = Telefono::create([ 
                    'persona_id' => $persona_tutor->id, 
                    'numero'=> $request->tel1_tutor,
                    'categoria'=>'Personal1',
                    
                ]);
                $telefono_tutor->save();
    
                if(empty($request->tel2_tutor)){
                        
                }else{
                    $telefono2_tutor = Telefono::create([ 
                        'persona_id' => $persona_tutor->id, 
                        'numero'=> $request->tel2_tutor,
                        'categoria'=>'Personal2',
                        
                    ]);
                    $telefono2_tutor->save();
                }
    
                if($request->tutor_no_trabaja){
                    
                }else{
                    $domicilio_lab_tutor = Domicilio::create([
                        'calle' => $request->calle_lab_tutor,
                        'numero' => $request->num_calle_lab_tutor,
                        'cod_postal' => $request->cod_postal_lab_tutor,
                        'localidad' => $request->localidad_lab_tutor,
                        'departamento' => $request->num_depto_lab_tutor,
                    ]);
                    $domicilio_lab_tutor->save();
    
    
    
                $telefono_lab_tutor = Telefono::create([ 
                    'persona_id' => $persona_tutor->id, 
                    'numero' => $request->tel_lab_tutor,
                    'categoria'=>'Laboral',
                    
                ]);
                $telefono_lab_tutor->save();
    
                }
    
                $trabajo_tutor = TrabajoPersona::create([
                    'persona_id' =>$persona_tutor->id, 
                    'lugar_trabajo' => $request->lugar_trabajo_tutor,
                    'domicilio_trabajo_id' =>$domicilio_lab_tutor->id, 
                ]);
                $trabajo_tutor->save();
                $parentesco_tutor = Parentesco::create([
                    'persona_id' =>$persona_tutor->id, 
                    'alumno_id' => $alumno->id,
                    'parentesco' => $request->parentesco_tutor,
                ]);
                $parentesco_tutor->save();
    
                $autoridad_tutor = Autoridad::create([
                    'persona_id' =>$persona_tutor->id, 
                    'user_id' => $user->id,
                ]);
                $autoridad_tutor->save(); 
        }
    }

    if($request->tutor_suplente_ok){
        $tutor_sup = TutorSuplente::create([
            'alumno_id' =>$alumno->id, 
            'nombre' => $request->nombres_tutor_sup1,
            'apellido' => $request->apellidos_tutor_sup1,
            'parentesco' =>$request->parentesco_tutor_sup1,
            ]);
        $tutor_sup->save(); 
        
    
    if(empty($request->nombres_tutor_sup2)){
    }else{
        $tutor_sup2 = TutorSuplente::create([
            'alumno_id' =>$alumno->id, 
            'nombre' => $request->nombres_tutor_sup2,
            'apellido' => $request->apellidos_tutor_sup2,
            'parentesco' =>$request->parentesco_tutor_sup2,
            ]);
        $tutor_sup2->save();
    }
    
    }
        
       // return back()->with('flash','Tu legajo fue creado');
       
        return View::make('legajos.crearLegajos.legajoCreado')->with('alumno', $alumno);


    }
    

    public function create()
    {
        $alumnoPorDefecto = array ( 'nombres_alu' => 'NombresAlumno',
        'apellidos_alu' => 'ApellidosAlumno',
        'lugar_nac_alu' => 'LugarNacimientoAlumno',
        'fec_nac_alu' => '1111-11-11',
        'tipo_doc_alu' => 'Tipo Documento',
        'num_doc_alu' => '99999',
        'nacionalidad_alu' => 'Nacionalidad',
        'sexo_alu' => 'F',
        'grupo_factor_alu' => 'Grupo Sanguineo',
        'tel1_alu' => '383400000',
        'tel2_alu' => '',
        'email_alu' => 'email@gmail.com',
        'localidad_alu' => 'Localidad',
        'cod_postal_alu' => '4700',
        'barrio_alu' => '',
        'calle_alu' => 'nombreCalle',
        'num_calle_alu' => '000',
        'piso_alu' => '',
        'num_depto_alu' => '',
        'esc_procedencia_alu' => 'EscuelaProcedencia',
        'sexo_alu_f' =>'checked');

        $madre_mismodomicilio ='no';
        $madrePorDefecto = array ( 
            'nombres_madre' => 'NombresMadre',
        'apellidos_madre' => 'ApellidosMadre',
        'lugar_nac_madre' => 'LugarNacimientoMadre',
        'fec_nac_madre' => '1111-11-11',
        'tipo_doc_madre' => 'Tipo Documento',
        'num_doc_madre' => '99999',
        'nacionalidad_madre' => 'Nacionalidad',
        'sexo_madre' => 'F',
        'tel1_madre' => '38341111',
        'tel2_madre' => '',
        'email_madre' => 'emailmadre@gmail.com',
        'localidad_madre' => 'Localidad',
        'cod_postal_madre' => '4700',
        'barrio_madre' => '',
        'calle_madre' => 'nombreCalleMadre',
        'num_calle_madre' => '000',
        'piso_madre' => '',
        'num_depto_madre' => '',
        'profesion_madre' => 'ProfesionMadre',
        'lugar_trabajo_madre' => 'LugarTrabajoMadre',
        'localidad_lab_madre' => 'Localidad',
        'cod_postal_lab_madre' =>'4700',
        'barrio_lab_madre' => '',
        'calle_lab_madre' => 'CalleLaboralMadre',
        'num_calle_lab_madre' => '001',
        'piso_lab_madre' => '',
        'num_depto_lab_madre' => '',
        'tel_lab_madre' => '383400000',
    );
    $padre_mismodomicilio ='no';
    $padrePorDefecto = array (
    'nombres_padre' => 'NombresPadre',
        'apellidos_padre' => 'ApellidosPadre',
        'lugar_nac_padre' => 'LugarNacimientoPadre',
        'fec_nac_padre' => '1111-11-11',
        'tipo_doc_padre' => 'Tipo Documento',
        'num_doc_padre' => '99999',
        'nacionalidad_padre' => 'Nacionalidad',
        'sexo_padre' => 'F',
        'tel1_padre' => '38341111',
        'tel2_padre' => '',
        'email_padre' => 'emailpadre@gmail.com',
        'padre_mismodomicilio ' => "si",
        'localidad_padre' => 'Localidad',
        'cod_postal_padre' => '4700',
        'barrio_padre' => '',
        'calle_padre' => 'nombreCallePadre',
        'num_calle_padre' => '000',
        'piso_padre' => '',
        'num_depto_padre' => '',
        'profesion_padre' => 'ProfesionPadre',
        'lugar_trabajo_padre' => 'LugarTrabajoPadre',
        'localidad_lab_padre' => 'Localidad',
        'cod_postal_lab_padre' =>'4700',
        'barrio_lab_padre' => '',
        'calle_lab_padre' => 'CalleLaboralPadre',
        'num_calle_lab_padre' => '001',
        'piso_lab_padre' => '',
        'num_depto_lab_padre' => '',
        'tel_lab_padre' => '383400000',
    );
    $tutor_mismodomicilio ='no';
    $tutorPorDefecto = array ( 'tutor_mismodomicilio ' => 'no',
        'nombres_tutor' => 'NombresTutor',
        'apellidos_tutor' => 'ApellidosTutor',
        'lugar_nac_tutor' => 'LugarNacimientoTutor',
        'fec_nac_tutor' => '1111-11-11',
        'tipo_doc_tutor' => 'Tipo Documento',
        'num_doc_tutor' => '99999',
        'nacionalidad_tutor' => 'Nacionalidad',
        'sexo_tutor' => 'F',
        'parentesco_tutor' => 'Hermano',
        'tel1_tutor' => '38341111',
        'tel2_tutor' => '',
        'email_tutor' => 'emailtutor@gmail.com',
        'localidad_tutor' => 'Localidad',
        'cod_postal_tutor' => '4700',
        'barrio_tutor' => '',
        'calle_tutor' => 'nombreCalleTutor',
        'num_calle_tutor' => '000',
        'piso_tutor' => '',
        'num_depto_tutor' => '',
        'profesion_tutor' => 'ProfesionTutor',
        'lugar_trabajo_tutor' => 'LugarTrabajoTutor',
        'localidad_lab_tutor' => 'Localidad',
        'cod_postal_lab_tutor' =>'4700',
        'barrio_lab_tutor' => '',
        'calle_lab_tutor' => 'CalleLaboralTutor',
        'num_calle_lab_tutor' => '001',
        'piso_lab_tutor' => '',
        'num_depto_lab_tutor' => '',
        'tel_lab_tutor' => '383400000',
    );

    $tutorSupPorDefecto = array (   'puede_ser_retirado' => 'no',
                                    'tutor_suplente_ok' => 'no');

        return view('legajos.crearLegajos.crearlegajo', compact('alumnoPorDefecto','madrePorDefecto','padrePorDefecto', 'tutorPorDefecto', 'tutorSupPorDefecto', 'madre_mismodomicilio','padre_mismodomicilio','tutor_mismodomicilio'));
    }
    
    public function edit()
    {
        $alumnos = Alumno::all();
        
        return view('legajos.modificarLegajos.legajoBusqueda')->with('alumnos', $alumnos)->with('sexo_madre','F')->with('sexo_padre','M')->with('madre_mismodomicilio','no')->with('padre_mismodomicilio','no')->with('tutor_mismodomicilio','no');
    }

    public function update(Request $request)
    {
        $alumnos = Alumno::all();
        return view('legajos.modificarLegajos.legajoBusqueda')->with('alumnos', $alumnos);
    }

    public function destroy()
    {
        //
    }

    public function searchDNI(Request $request)
    {
        $dni = $request->dni;  
        $persona = Persona::where('nro_doc', $dni)->get()->first();
        
        if ($persona->exists()){
            $alumno = Alumno::find($persona->alumno->id);
            return view('legajos.modificarLegajos.legajoCargado', compact('alumno'));
        
        }else{
            return back()->with('flasherror','El DNI ingresado no se encuentra cargado');
        }
    }

    public function searchListado(Request $request)
    {
        $id = $request->alumno; 

        //ENVIO ALUMNO
        $alumno = Alumno::find($id)->first();
        if($alumno->persona->telefonos->count() == 2){
            $telefono_alumno2 = $alumno->persona->telefonos->get(1)->numero;
            
        }else{
            $telefono_alumno2 = '';
        }
        $datosAlumno = array('nombres_alu' => $alumno->persona->nombre,
                            'apellidos_alu' => $alumno->persona->apellido,
                            'lugar_nac_alu' => $alumno->persona->lugar_nacimiento,
                            'fec_nac_alu' => $alumno->persona->fecha_nacimiento,
                            'tipo_doc_alu' => $alumno->persona->tipo_nro_doc,
                            'num_doc_alu' => $alumno->persona->nro_doc,
                            'nacionalidad_alu' => $alumno->persona->nacionalidad,
                            'sexo_alu' => $alumno->persona->sexo,
                            'grupo_factor_alu' =>$alumno->grupo_factor_alu,
                            'tel1_alu' => $alumno->persona->telefonos->get(0)->numero,
                            'tel2_alu' => $telefono_alumno2,
                            'email_alu' => $alumno->persona->email,
                            'localidad_alu' => $alumno->persona->domicilio->localidad,
                            'cod_postal_alu' => $alumno->persona->domicilio->cod_postal,
                            'barrio_alu' => $alumno->persona->domicilio->barrio,
                            'calle_alu' => $alumno->persona->domicilio->calle,
                            'num_calle_alu' => $alumno->persona->domicilio->numero,
                            'piso_alu' => $alumno->persona->domicilio->piso,
                            'num_depto_alu' => $alumno->persona->domicilio->num_depto,
                            'esc_procedencia_alu' => $alumno->escuela_procedencia
                );

        
        
        //ENVIO MADRE
            $madre = $alumno->legajo->madre;
        if($alumno->legajo->madre == null){         //Si la madre esta muerta desactivamos todos los campos
            
            $datosMadre = array(   'fallecida_madre' => 'si',
                                    'madre_mismodomicilio' => 'no',
                                            'nombres_madre_disabled' => 'si',
                                            'apellidos_madre_disabled' => 'si',
                                            'lugar_nac_madre_disabled' => 'si',
                                            'fec_nac_madre_disabled' => 'si',
                                            'tipo_doc_madre_disabled' => 'si',
                                            'nro_doc_madre_disabled' => 'si',
                                            'nacionalidad_madre_disabled' => 'si',
                                            'sexo_madre_disabled' => 'si',
                                            'tel1_madre_disabled' => 'si',
                                            'tel2_madre_disabled' => 'si',
                                            'email_madre_disabled' => 'si',
                                            'mismodomicilio_madre_disabled' => 'si',
                                            'localidad_madre_disabled' => 'si',
                                            'cod_postal_madre_disabled' => 'si',
                                            'barrio_madre_disabled' => 'si',
                                            'calle_madre_disabled' => 'si',
                                            'num_calle_madre_disabled' => 'si',
                                            'piso_madre_disabled' => 'si',
                                            'num_depto_madre_disabled' => 'si',
                                            'profesion_madre_disabled' => 'si',
                                            'lugar_trabajo_madre_disabled' => 'si',
                                            'notrabaja_madre_disabled' => 'si',
                                            'localidad_lab_madre_disabled' => 'si',
                                            'cod_postal_lab_madre_disabled' => 'si',
                                            'barrio_lab_madre_disabled' => 'si',
                                            'calle_lab_madre_disabled' => 'si',
                                            'num_calle_lab_madre_disabled' => 'si',
                                            'piso_lab_madre_disabled' => 'si',
                                            'num_depto_lab_madre_disabled' => 'si',
                                            'tel_lab_madre_disabled' => 'si'
        );
        }else{ //Si la madre esta viva
            
   
            
        if($madre->telefonos->count() == 2){        //Vemos si tiene 2 telefonos
            $telefono_madre2 = $madre->telefonos->get(1)->numero;
            
        }else{
            $telefono_madre2 = '';
        }

        if($madre->domicilio->id == $alumno->persona->domicilio->id){
            $madre_mismodomicilio = "si";
        }else{
            $madre_mismodomicilio = "no";
        }
      
        //Si la madre no tiene domicilio de trabajo (NO TRABAJA)
        if(TrabajoPersona::where('persona_id',$madre->id)->get()->first() == null){
                $datosMadre = array('madre_no_trabaja' => 'si',
                    'nombres_madre' => $madre->nombre,
                'apellidos_madre' => $madre->apellido,
                'lugar_nac_madre' => $madre->lugar_nacimiento,
                'fec_nac_madre' => $madre->fecha_nacimiento,
                'tipo_doc_madre' => $madre->tipo_nro_doc,
                'num_doc_madre' => $madre->nro_doc,
                'nacionalidad_madre' => $madre->nacionalidad,
                'sexo_madre' => $madre->sexo,
                'tel1_madre' => $madre->telefonos->get(0)->numero,
                'tel2_madre' => $telefono_madre2,
                'email_madre' => $madre->email,
                'madre_mismodomicilio' => $madre_mismodomicilio,
                'localidad_madre' => $madre->domicilio->localidad,
                'cod_postal_madre' => $madre->domicilio->cod_postal,
                'barrio_madre' => $madre->domicilio->barrio,
                'calle_madre' => $madre->domicilio->calle,
                'num_calle_madre' => $madre->domicilio->numero,
                'piso_madre' => $madre->domicilio->piso,
                'num_depto_madre' => $madre->domicilio->num_depto,
                'profesion_madre' => $madre->profesion);
        
            }else{ //Si la madre tiene domicilio de trabajo (SI TRABAJA)

                $datos_lab_madre = TrabajoPersona::where('persona_id',$madre->id)->get()->first();
                $domicilio_lab_madre = Domicilio::find(TrabajoPersona::where('persona_id',$madre->id)->get()->first()->domicilio_trabajo_id);
                $tel_lab_madre = Telefono::where('persona_id', $madre->id)->where('categoria','Laboral')->get('numero')->first()->numero;
                $datosMadre = array('nombres_madre' => $madre->nombre,
                'apellidos_madre' => $madre->apellido,
                'lugar_nac_madre' => $madre->lugar_nacimiento,
                'fec_nac_madre' => $madre->fecha_nacimiento,
                'tipo_doc_madre' => $madre->tipo_nro_doc,
                'num_doc_madre' => $madre->nro_doc,
                'nacionalidad_madre' => $madre->nacionalidad,
                'sexo_madre' => $madre->sexo,
                'tel1_madre' => $madre->telefonos->get(0)->numero,
                'tel2_madre' => $telefono_madre2,
                'email_madre' => $madre->email,
                'madre_mismodomicilio' => $madre_mismodomicilio,
                'localidad_madre' => $madre->domicilio->localidad,
                'cod_postal_madre' => $madre->domicilio->cod_postal,
                'barrio_madre' => $madre->domicilio->barrio,
                'calle_madre' => $madre->domicilio->calle,
                'num_calle_madre' => $madre->domicilio->numero,
                'piso_madre' => $madre->domicilio->piso,
                'num_depto_madre' => $madre->domicilio->num_depto,
                'profesion_madre' => $madre->profesion,
                'lugar_trabajo_madre' => $datos_lab_madre->lugar_trabajo,
                'localidad_lab_madre' => $domicilio_lab_madre->localidad,
                'cod_postal_lab_madre' => $domicilio_lab_madre->cod_postal,
                'barrio_lab_madre' => $domicilio_lab_madre->barrio,
                'calle_lab_madre' => $domicilio_lab_madre->calle,
                'num_calle_lab_madre' => $domicilio_lab_madre->numero,
                'piso_lab_madre' => $domicilio_lab_madre->piso,
                'num_depto_lab_madre' => $domicilio_lab_madre->num_depto,
                'tel_lab_madre' => $tel_lab_madre,
                
            );    
        }
        }
        
        //ENVIO PADRE
        $padre = $alumno->legajo->padre;
        if($alumno->legajo->padre == null){
            $datosPadre = array(            'fallecido_padre' => 'si',
                                            'padre_mismodomicilio' => 'no',
                                             'nombres_padre_disabled' => 'si',
                                             'apellidos_padre_disabled' => 'si',
                                             'lugar_nac_padre_disabled' => 'si',
                                             'fec_nac_padre_disabled' => 'si',
                                             'tipo_doc_padre_disabled' => 'si',
                                             'nro_doc_padre_disabled' => 'si',
                                             'nacionalidad_padre_disabled' => 'si',
                                             'sexo_padre_disabled' => 'si',
                                             'tel1_padre_disabled' => 'si',
                                             'tel2_padre_disabled' => 'si',
                                             'email_padre_disabled' => 'si',
                                             'mismodomicilio_padre_disabled' => 'si',
                                             'localidad_padre_disabled' => 'si',
                                             'cod_postal_padre_disabled' => 'si',
                                             'barrio_padre_disabled' => 'si',
                                             'calle_padre_disabled' => 'si',
                                             'num_calle_padre_disabled' => 'si',
                                             'piso_padre_disabled' => 'si',
                                             'num_depto_padre_disabled' => 'si',
                                             'profesion_padre_disabled' => 'si',
                                             'lugar_trabajo_padre_disabled' => 'si',
                                             'notrabaja_padre_disabled' => 'si',
                                             'localidad_lab_padre_disabled' => 'si',
                                             'cod_postal_lab_padre_disabled' => 'si',
                                             'barrio_lab_padre_disabled' => 'si',
                                             'calle_lab_padre_disabled' => 'si',
                                             'num_calle_lab_padre_disabled' => 'si',
                                             'piso_lab_padre_disabled' => 'si',
                                             'num_depto_lab_padre_disabled' => 'si',
                                             'tel_lab_padre_disabled' => 'si'
         );
         }else{
            
        if($padre->telefonos->count() == 2){
            $telefono_padre2 = $padre->telefonos->get(1)->numero;
            
        }else{
            $telefono_padre2 = '';
        }
        if($padre->domicilio->id == $alumno->persona->domicilio->id){
            $padre_mismodomicilio = 'si';
        }else{
            $padre_mismodomicilio = 'no';
        }
        
        //Si el padre no tiene domicilio de trabajo (NO TRABAJA)
        if(TrabajoPersona::where('persona_id',$padre->id)->get()->first() == null){
                $datosPadre = array('padre_no_trabaja' => 'si',
                    'nombres_padre' => $padre->nombre,
                'apellidos_padre' => $padre->apellido,
                'lugar_nac_padre' => $padre->lugar_nacimiento,
                'fec_nac_padre' => $padre->fecha_nacimiento,
                'tipo_doc_padre' => $padre->tipo_nro_doc,
                'num_doc_padre' => $padre->nro_doc,
                'nacionalidad_padre' => $padre->nacionalidad,
                'sexo_padre' => $padre->sexo,
                'tel1_padre' => $padre->telefonos->get(0)->numero,
                'tel2_padre' => $telefono_padre2,
                'email_padre' => $padre->email,
                'padre_mismodomicilio' => $padre_mismodomicilio,
                'localidad_padre' => $padre->domicilio->localidad,
                'cod_postal_padre' => $padre->domicilio->cod_postal,
                'barrio_padre' => $padre->domicilio->barrio,
                'calle_padre' => $padre->domicilio->calle,
                'num_calle_padre' => $padre->domicilio->numero,
                'piso_padre' => $padre->domicilio->piso,
                'num_depto_padre' => $padre->domicilio->num_depto,
                'profesion_padre' => $padre->profesion);
        
            }else{ //Si el padre tiene domicilio de trabajo (SI TRABAJA)

                $datos_lab_padre = TrabajoPersona::where('persona_id',$padre->id)->get()->first();
                $domicilio_lab_padre = Domicilio::find(TrabajoPersona::where('persona_id',$padre->id)->get()->first()->domicilio_trabajo_id);
                $tel_lab_padre = Telefono::where('persona_id', $padre->id)->where('categoria','Laboral')->get('numero')->first()->numero;
                $datosPadre = array('nombres_padre' => $padre->nombre,
                'apellidos_padre' => $padre->apellido,
                'lugar_nac_padre' => $padre->lugar_nacimiento,
                'fec_nac_padre' => $padre->fecha_nacimiento,
                'tipo_doc_padre' => $padre->tipo_nro_doc,
                'num_doc_padre' => $padre->nro_doc,
                'nacionalidad_padre' => $padre->nacionalidad,
                'sexo_padre' => $padre->sexo,
                'tel1_padre' => $padre->telefonos->get(0)->numero,
                'tel2_padre' => $telefono_padre2,
                'email_padre' => $padre->email,
                'padre_mismodomicilio' => $padre_mismodomicilio,
                'localidad_padre' => $padre->domicilio->localidad,
                'cod_postal_padre' => $padre->domicilio->cod_postal,
                'barrio_padre' => $padre->domicilio->barrio,
                'calle_padre' => $padre->domicilio->calle,
                'num_calle_padre' => $padre->domicilio->numero,
                'piso_padre' => $padre->domicilio->piso,
                'num_depto_padre' => $padre->domicilio->num_depto,
                'profesion_padre' => $padre->profesion,
                'lugar_trabajo_padre' => $datos_lab_padre->lugar_trabajo,
                'localidad_lab_padre' => $domicilio_lab_padre->localidad,
                'cod_postal_lab_padre' => $domicilio_lab_padre->cod_postal,
                'barrio_lab_padre' => $domicilio_lab_padre->barrio,
                'calle_lab_padre' => $domicilio_lab_padre->calle,
                'num_calle_lab_padre' => $domicilio_lab_padre->numero,
                'piso_lab_padre' => $domicilio_lab_padre->piso,
                'num_depto_lab_padre' => $domicilio_lab_padre->num_depto,
                'tel_lab_padre' => $tel_lab_madre,
            );    
        }
       
        }
        $tutor = $alumno->legajo->tutor->persona;
        if($tutor == $madre){
            $tutor = $madre;
            
         }else if($tutor == $padre){
            $tutor = $padre;
            
         }else{
            $tutor = Autoridad::where('persona_id',$tutor->id)->get()->first()->persona;
         }

        
         if($tutor->telefonos->count() == 2){
            $telefono_tutor2 = $tutor->telefonos->get(1)->numero;
            
        }else{
            $telefono_tutor2 = '';
        }
        if($tutor->domicilio->id == $alumno->persona->domicilio->id){
            $tutor_mismodomicilio = 'si';
        }else{
            $tutor_mismodomicilio = 'no';
        }
        //Si el tutor no tiene domicilio de trabajo (NO TRABAJA)
        if(TrabajoPersona::where('persona_id',$tutor->id)->get()->first() == null){
            $notrabaja_tutor = 'si';
            $datosTutor = array('nombres_tutor' => $tutor->nombre,
            'apellidos_tutor' => $tutor->apellido,
            'lugar_nac_tutor' => $tutor->lugar_nacimiento,
            'fec_nac_tutor' => $tutor->fecha_nacimiento,
            'tipo_doc_tutor' => $tutor->tipo_nro_doc,
            'num_doc_tutor' => $tutor->nro_doc,
            'nacionalidad_tutor' => $tutor->nacionalidad,
            'parentesco_tutor' => $tutor->parentescos->where('id',$alumno->id)->first()->pivot->parentesco,
            'sexo_tutor' => $tutor->sexo,
            'tel1_tutor' => $tutor->telefonos->get(0)->numero,
            'tel2_tutor' => $telefono_tutor2,
            'email_tutor' => $tutor->email,
            'tutor_mismodomicilio' => $tutor_mismodomicilio,
            'localidad_tutor' => $tutor->domicilio->localidad,
            'cod_postal_tutor' => $tutor->domicilio->cod_postal,
            'barrio_tutor' => $tutor->domicilio->barrio,
            'calle_tutor' => $tutor->domicilio->calle,
            'num_calle_tutor' => $tutor->domicilio->numero,
            'piso_tutor' => $tutor->domicilio->piso,
            'num_depto_tutor' => $tutor->domicilio->num_depto,
            'profesion_tutor' => $tutor->profesion);
    
        }else{ //Si el tutor tiene domicilio de trabajo (SI TRABAJA)

            $datos_lab_tutor = TrabajoPersona::where('persona_id',$tutor->id)->get()->first();
            $domicilio_lab_tutor = Domicilio::find(TrabajoPersona::where('persona_id',$tutor->id)->get()->first()->domicilio_trabajo_id);
            $tel_lab_tutor = Telefono::where('persona_id', $tutor->id)->where('categoria','Laboral')->get('numero')->first()->numero;
            $datosTutor = array('nombres_tutor' => $tutor->nombre,
            'apellidos_tutor' => $tutor->apellido,
            'lugar_nac_tutor' => $tutor->lugar_nacimiento,
            'fec_nac_tutor' => $tutor->fecha_nacimiento,
            'tipo_doc_tutor' => $tutor->tipo_nro_doc,
            'num_doc_tutor' => $tutor->nro_doc,
            'nacionalidad_tutor' => $tutor->nacionalidad,
            'sexo_tutor' => $tutor->sexo,
            'parentesco_tutor' => $tutor->parentescos->where('id',$alumno->id)->first()->pivot->parentesco,
            'tel1_tutor' => $tutor->telefonos->get(0)->numero,
            'tel2_tutor' => $telefono_tutor2,
            'email_tutor' => $tutor->email,
            'tutor_mismodomicilio' => $tutor_mismodomicilio,
            'localidad_tutor' => $tutor->domicilio->localidad,
            'cod_postal_tutor' => $tutor->domicilio->cod_postal,
            'barrio_tutor' => $tutor->domicilio->barrio,
            'calle_tutor' => $tutor->domicilio->calle,
            'num_calle_tutor' => $tutor->domicilio->numero,
            'piso_tutor' => $tutor->domicilio->piso,
            'num_depto_tutor' => $tutor->domicilio->num_depto,
            'profesion_tutor' => $tutor->profesion,
            'lugar_trabajo_tutor' => $datos_lab_tutor->lugar_trabajo,
            'localidad_lab_tutor' => $domicilio_lab_tutor->localidad,
            'cod_postal_lab_tutor' => $domicilio_lab_tutor->cod_postal,
            'barrio_lab_tutor' => $domicilio_lab_tutor->barrio,
            'calle_lab_tutor' => $domicilio_lab_tutor->calle,
            'num_calle_lab_tutor' => $domicilio_lab_tutor->numero,
            'piso_lab_tutor' => $domicilio_lab_tutor->piso,
            'num_depto_lab_tutor' => $domicilio_lab_tutor->num_depto,
            'tel_lab_tutor' => $tel_lab_madre,
        );    
        }
        $datosTutorSup = array();
        if(TutorSuplente::where('alumno_id',$alumno->id)->get()->count() == 2){
            $datosTutorSup = array('nombres_tutor_sup1' => TutorSuplente::where('alumno_id',$alumno->id)->first()->nombre,
            'apellidos_tutor_sup1' => TutorSuplente::where('alumno_id',$alumno->id)->first()->apellido,
            'parentesco_tutor_sup1' => TutorSuplente::where('alumno_id',$alumno->id)->first()->parentesco,
            'tel_tutor_sup1' => TutorSuplente::where('alumno_id',$alumno->id)->first()->telefono,
            'nombres_tutor_sup2' => TutorSuplente::where('alumno_id',$alumno->id)->get()->get(1)->nombre,
            'apellidos_tutor_sup2' => TutorSuplente::where('alumno_id',$alumno->id)->get()->get(1)->apellido,
            'parentesco_tutor_sup2' => TutorSuplente::where('alumno_id',$alumno->id)->get()->get(1)->parentesco,
            'tel_tutor_sup2' => TutorSuplente::where('alumno_id',$alumno->id)->get()->get(1)->telefono,
            'tiene_tutor' => 'si',
            'puede_retirado' => 'si');
        }else if(TutorSuplente::where('alumno_id',$alumno->id)->get()->count() == 1){
            $datosTutorSup = array('nombres_tutor_sup1' => TutorSuplente::where('alumno_id',$alumno->id)->first()->nombre,
            'apellidos_tutor_sup1' => TutorSuplente::where('alumno_id',$alumno->id)->first()->apellido,
            'parentesco_tutor_sup1' => TutorSuplente::where('alumno_id',$alumno->id)->first()->parentesco,
            'tel_tutor_sup1' => TutorSuplente::where('alumno_id',$alumno->id)->first()->telefono,
            'tiene_tutor' => 'si',
            'puede_retirado' => 'si');
        }


   
       
        

        return view('legajos.modificarLegajos.legajoCargado', compact('datosAlumno', 'datosMadre', 'datosPadre','datosTutor','datosTutorSup'));
    }

}

