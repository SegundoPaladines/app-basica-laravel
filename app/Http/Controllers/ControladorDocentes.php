<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorDocentes extends Controller
{
    public function mostrarVistaDocentes(){
        return view('Udenar.docentes');
    }
}
