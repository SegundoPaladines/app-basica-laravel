<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorEstudiantes extends Controller
{
    public function mostrarVistaEstudiantes(){
        return view('Udenar.estudiantes');
    }
}
