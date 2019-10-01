<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Profesor;
use App\User;
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
        $id = '22'; //JONY pone 22 para que te funque... acordate
        $materia_id =null;
        return view('nota.index',[
            // enviamos todos los usuarios a la vista
            'profesor' => Profesor::get()->first()->find($id), //definimos una variable users que contendra el nombre y id del profesor
             'materia_id' =>  $materia_id ,                                             // para usarlos, sera mediante el nombre users en la vista
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

    public function getcurso(Request  $request )
    {
        if($request->ajax()){
            // $cursos= Curso::where('materia_id',$request->materia_id )->get();
            $cursos= Materia::find($request->materia)->cursos;
            foreach($cursos as $curso){
                $cursoArray[$curso->id]= $curso->seccion;
            }
            return response()->json($cursoArray);
        }


    }

    
}
