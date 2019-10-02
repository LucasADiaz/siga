<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use View;
class DocumentoController extends Controller
{
    public function index(Request $request)
    { 
        /*$personas = Persona::dni($request->get('dni'))->orderBy('id','DESC')->paginate();
        $alumnos = Alumno::where('persona_id',$personas->id);
        return view('legajos.documentos.crearDocumentos', compact('alumnos'));*/
    }

    public function search(Request $request)
    {
        $dni = $request->dni;   
        $persona = Persona::where('nro_doc', $dni);
        

        if ($persona->exists()){
            $alumno = Alumno::find($persona->get('id'))->first();
            return view('legajos.documentos.crearDocumentos', compact('alumno'));
        }else{
            return back()->with('flasherror','El DNI ingresado no se encuentra cargado');
        }
        
        
    /*$alumno = Alumno::newQuery();

    if($request->has('dni')){
    $alumno->where('dni', 'like', $request->dni);
    }
    $alumno = $alumno->get();
    return view('crearDocumentos', compact('alumno'));*/
    }

    public function create(Request $request)
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
