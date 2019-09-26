<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Legajo;
use App\User;
use App\Autoridad;
use App\Alumno;
use App\Persona;
use App\Domicilio;
use App\Telefono;
use App\Responsable;
use Illuminate\Support\Facades\Hash;

class LegajosController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        
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
            'nro_doc' => $request->num_doc_alu,
            'nacionalidad' => $request->nacionalidad_alu,
            'domicilio_id' =>$domicilio_alu->id,
            
        ]);
        $persona_alu->save();

        $alumno = Alumno::create([
            'persona_id' =>$persona_alu->id, 
            'escuela_procedencia' => $request->esc_procedencia_alu,
            'curso_id' => 'null',
            'email'=> $request->email_alu,
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
            'categoria'=>'Personal',
            
        ]);
        $telefono_alu->save();

        if(empty($request->tel2_alu)){
            
        }else{
            $telefono2_alu = Telefono::create([ 
                'persona_id' => $persona_alu->id, 
                'numero'=> $request->tel2_alu,
                'categoria'=>'Personal',
                
            ]);
            $telefono2_alu->save();
        }

        if($request->madre_fallecida){
            
        }else{
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
         'nro_doc' => $request->num_doc_madre,
         'nacionalidad' => $request->nacionalidad_madre,
         
         'domicilio_id' =>$domicilio_madre->id,
         
     ]);
     $persona_madre->save();

     $telefono_madre = Telefono::create([ 
         'persona_id' => $persona_madre->id, 
         'numero'=> $request->tel1_madre,
         'categoria'=>'Personal',
         
     ]);
     $telefono_madre->save();

     if(empty($request->tel2_madre)){
            
    }else{
        $telefono2_madre = Telefono::create([ 
            'persona_id' => $persona_madre->id, 
            'numero'=> $request->tel2_madre,
            'categoria'=>'Personal',
            
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

  
    }
    $responsable_madre = Responsable::create([
        'persona_id' =>$persona_madre->id, 
        'profesion' => $request->profesion_madre,
        'email' => $request->email_madre,
        'lugar_trabajo' => $request->lugar_trabajo_madre,
    ]);
    $responsable_madre->save();
        }
    
    

    if($request->padre_fallecido){
            
    }else{
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
     'nro_doc' => $request->num_doc_padre,
     'nacionalidad' => $request->nacionalidad_padre,
     
     'domicilio_id' =>$domicilio_padre->id,
     
 ]);
 $persona_padre->save();

 $telefono_padre = Telefono::create([ 
     'persona_id' => $persona_padre->id, 
     'numero'=> $request->tel1_padre,
     'categoria'=>'Personal',
     
 ]);
 $telefono_padre->save();

 if(empty($request->tel2_padre)){
        
}else{
    $telefono2_padre = Telefono::create([ 
        'persona_id' => $persona_padre->id, 
        'numero'=> $request->tel2_padre,
        'categoria'=>'Personal',
        
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
$responsable_padre = Responsable::create([
    'persona_id' =>$persona_padre->id, 
    'profesion' => $request->profesion_padre,
    'email' => $request->email_padre,
    'lugar_trabajo' => $request->lugar_trabajo_padre,
]);
$responsable_padre->save();
/*
}


    if($request->padre_es_tutor){
        $autoridad_padre = Autoridad::create([
            'persona_id' =>$responsable_padre->id, 
            'user_id' => $user->id,
            'email' => $request->email_padre,
        ]);
        $autoridad_padre->save();
    }else if($request->madre_es_tutor){
        $autoridad_madre = Autoridad::create([
            'persona_id' =>$responsable_madre->id, 
            'user_id' => $user->id,
            'email' => $request->email_madre,
        ]);
        $autoridad_madre->save();
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
     'nro_doc' => $request->num_doc_tutor,
     'nacionalidad' => $request->nacionalidad_tutor,
     
     'domicilio_id' =>$domicilio_tutor->id,
     
 ]);
 $persona_tutor->save();

 $telefono_tutor = Telefono::create([ 
     'persona_id' => $persona_tutor->id, 
     'numero'=> $request->tel1_tutor,
     'categoria'=>'Personal',
     
 ]);
 $telefono_tutor->save();

 if(empty($request->tel2_tutor)){
        
}else{
    $telefono2_tutor = Telefono::create([ 
        'persona_id' => $persona_tutor->id, 
        'numero'=> $request->tel2_tutor,
        'categoria'=>'Personal',
        
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

$responsable_tutor = Responsable::create([
    'persona_id' =>$persona_tutor->id, 
    'profesion' => $request->profesion_tutor,
    'email' => $request->email_tuto,
    'lugar_trabajo' => $request->lugar_trabajo_tutor,
]);
$responsable_tutor->save();


$autoridad_tutor = Autoridad::create([
    'persona_id' =>$persona_tutor->id, 
    'user_id' => $user->id,
    'email' => $request->email_tutor,
]);
$autoridad_tutor->save(); */
}  

return back()->with('flash','Tu legajo fue creado');

}




        



    
    public function show()
    {
        
    }

    public function crearLegajo()
    {
        return view('legajos.crearlegajo');
    }
    
    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
