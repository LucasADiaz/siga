<?php

namespace App\Http\Controllers;

use App\Materia;
use App\Profesor;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Mostrar una lista del recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::all();
        $titulo = 'Listado de Materias';
        return view('materia.index', compact('titulo','materias'));
    }

    /**
     * Mostrar el formulario para crear un nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesores = Profesor::all();                          //Trae todos los Profesores
        $persona_prof = $profesores->map(function ($prof) {     //Trae solo las personas que son Profesores
            return $prof->autoridad->persona;
        });
        $persona_prof = $persona_prof->sortBy('nombre');            //Las ordena por su nombre
        return view('materia.create', compact('persona_prof'));;    //Y manda a la vista las personas que son profesores en orden alfabetico
    }

    /**
     * Almacenar un recurso recién creado en la Base de Datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Mostrar el recurso especificado.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Mostrar el formulario para editar el recurso especificado.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        //
    }

    /**
     * Actualiza el recurso especificado en la Base de Datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        //
    }

    /**
     * Eliminar el recurso especificado de la Base de Datos.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        //
    }
}
