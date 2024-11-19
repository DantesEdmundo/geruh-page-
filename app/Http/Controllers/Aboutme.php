<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aboutme extends Controller
{
    public function _aboutme()
    {
        return view('Aboutme');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'Asunto' => 'required'
        ]);
    }
}
