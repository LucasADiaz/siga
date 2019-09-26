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

   /*  $alumno = Alumno::create([
         'persona_id' =>$persona_alu->id, 
         'escuela_procedencia' => $request->esc_procedencia_alu,
         'curso_id' => 'null',
         'email'=> $request->email_alu,
         'grupo_factor' =>$request->grupo_factor_alu,
     ]);
     $alumno->save();

    

     $telefono_alu = Telefono::create([ 
         'persona_id' => $persona_alu->id, 
         'numero'=> $request->tel1_alu,
         'categoria'=>'Personal',
         
     ]);
     $telefono_alu->save();
     */
    }



        return back()->with('flash','Tu legajo fue creado');
      //  $alumno = Alumno::create([
            
            
          //  ]);
        
            

      //  $legajo = Legajo::create([
            
      //  ));
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
