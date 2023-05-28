<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorUdenar extends Controller
{
    public function mostrarVistaPrincipal(){
        return view('Udenar.vista-principal');
    }
    public function mostrarFacultades(){
        return view('Udenar.Facultades.vista-facultades');
    }
    public function mostrarFacing(){
        return view('Udenar.Facultades.Facultad de Ingenieria.vista-facing');
    }
    public function mostrarSistemas(){
        return view('Udenar.Facultades.Facultad de Ingenieria.Programas.vista-ing-sistemas');
    }
    public function mostrarElec(){
        return view('Udenar.Facultades.Facultad de Ingenieria.Programas.vista-ing-electronica');
    }
    public function mostrarCivil(){
        return view('Udenar.Facultades.Facultad de Ingenieria.Programas.vista-ing-civil');
    }
}