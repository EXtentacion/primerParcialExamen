<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class diarioController extends Controller
{

    public function metodoInicio(){
        return view('inicio');
    }
    public function metodoFormulario(){
        return view('formulario');
    }
    public function metodoRecuerdo(){
        return view('recuerdos');
    }

}

