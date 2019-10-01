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
        $personas = Alumno::all();

        return view('legajos.documentos.crearDocumentos', compact('personas'));
    }

    public function store($nombrealu)
    {
        
        return View::make('legajos.documentos.crearDocumentos')->with('nombrealu', $nombrealu );
    }   
}
