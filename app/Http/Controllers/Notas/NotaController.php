<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Profesor;
use App\Materia;
use App\User;
use App\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $id = '1'; //JONY pone 22 para que te funque... acordate
        return view('nota.index',[
            // enviamos todos los usuarios a la vista
            'profesor' => Profesor::with('materias')->get()->first()->find($id), //definimos una variable users que contendra el nombre y id del profesor
                                                         // para usarlos, sera mediante el nombre users en la vista
            ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id2 = '22'; //id obtenido de la variable session

        return view('nota.show',[
            'profesor' => Profesor::get()->first()->find($id2), //definimos una variable users que contendra el nombre y id del profesor
            'curso' => Curso::find($id),
        ]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
    }

    public function obtener_cursos($id)
    {
        $materia = Materia::with('cursos')->find($id);

        return $materia->cursos;
    }

    
    public function mostrar_alumnos($id_materia, $id_curso)
    {
        $alumnos = Alumno::with('persona', 'notas')->where('curso_id', $id_curso)->get();
/*         $alumnos = $alumnos->map(function($val) use($id_materia){
            $val->notas = $val->notas->filter(function ($key, $value) use($id_materia){
                    if(!empty($value)){
                        if($value->materia_id == $id_materia){
                            return $value;
                        }
                    }
            });
            return $val;
        }); */
        $id2 = '1';
        return view('nota.show',[
            'alumnos' => $alumnos,
            'profesor' => Profesor::get()->first()->find($id2),
            'id_materia'=> $id_materia, 
            'id_curso'=> $id_curso
        ]);
    }
}
