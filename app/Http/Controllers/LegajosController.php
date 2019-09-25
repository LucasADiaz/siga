<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Legajo;
use App\User;
use App\Autoridad;
use App\Alumno;
use App\Persona;
use App\Domicilio;
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
