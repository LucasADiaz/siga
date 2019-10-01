<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Persona;
use Illuminate\Http\Request;
use View;
class DocumentoController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        $alumnos = Alumno::all();

        return view('legajos.documentos.crearDocumentosBusqueda', compact('alumnos'));
    }

    public function store($id_alumno)
    {
        $alumno = Alumno::where('id', $id_alumno)->first();
        return View::make('legajos.documentos.crearDocumentos', compact('alumno'));
    }   
}
