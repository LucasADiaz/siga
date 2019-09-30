<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CursoMateria;

class CursoController extends Controller
{
    
    public function byMaterias($id)
    {

        // return CursoMateria::where('materia_id',$id)->get();
        return Materia::get()->find($id)->cursos;
    }

}
