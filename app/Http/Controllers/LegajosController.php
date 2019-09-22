<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        //
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
