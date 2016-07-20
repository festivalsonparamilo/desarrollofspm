<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegistroController extends Controller
{
    public function select()
    {
        return view('regist/registro');
    }

    public function intro($participante)
    {
        $aux = strcmp($participante,'musicos');
        if ($aux == 0) {
            return view('regist/'.$participante);
        }else {
            return view('errors/errorRegistro');
        }
    	
    }

    public function condition($participante)
    {
        $aux = strcmp($participante,'musico')+strcmp($participante,'arte-gast')+strcmp($participante,'tallerista');
        if ($aux == 0) {
            return view('regist/condi');
        }else {
            return view('errors/errorRegistro');
        }
    }

    public function forms($participante, $form)
    {
        $aux = strcmp($participante,'musico')+strcmp($participante,'arte-gast')+strcmp($participante,'tallerista');
        if ($aux == 0) {
            return view('regist/'.$participante);
        }else {
            return view('errors/errorRegistro');
        }
    }

    public function store($participante, $form)
    {
    	dd($participante,$form);
    }
}
