<?php

namespace App\Http\Controllers;

use DB;
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
        return view('legajos.crearLegajos.documentos.crearDocumentos', compact('alumnos'));*/
    }

    public function searchDNI(Request $request)
    {
        $dni = $request->dni;  
        $persona = Persona::where('nro_doc', $dni)->get()->first();
        
        if ($persona->exists()){
            $alumno = Alumno::find($persona->alumno->id);
            return view('legajos.crearLegajos.documentos.crearDocumentos', compact('alumno'));
        
        }else{
            return back()->with('flasherror','El DNI ingresado no se encuentra cargado');
        }
    }

    public function searchListado(Request $request)
    {
        $id = $request->alumno;  
        $alumno = Alumno::find($id)->first();
        return view('legajos.crearLegajos.documentos.crearDocumentos', compact('alumno'));
    }

    public function create(Request $request)
    {
        $alumnos = Alumno::all();
        return view('legajos.crearLegajos.documentos.crearDocumentosBusqueda', compact('alumnos'));
    }

    public function store($id_alumno)
    {
        $alumno = Alumno::where('id', $id_alumno)->first();
        return View::make('legajos.crearLegajos.documentos.crearDocumentos', compact('alumno'));
    }   
}
