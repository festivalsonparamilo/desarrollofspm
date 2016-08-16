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
        if ($participante == 'musicos' || $participante == 'talleristas' || $participante == 'gastronomos' || $participante == 'artesanos') {
            return view('regist/introdution', compact('participante'));
        }else{
            return view('errors/errorRegistro');
        }   	
    }

    public function condition($participante)
    {
        if ($participante == 'musicos' || $participante == 'talleristas' || $participante == 'gastronomos' || $participante == 'artesanos') {
            return view('regist/condition', compact('participante'));
        }else {
            return view('errors/errorRegistro');
        }
    }

    public function forms($participante)
    {
        if ($participante == 'musicos' || $participante == 'talleristas' || $participante == 'gastronomos' || $participante == 'artesanos') {
            return view('regist/form', compact('participante'));
        }else {
            return view('errors/errorRegistro');
        } 
    }
    public function noAcuerdo($participante)
    {
        return view('regist/noAcuerdo', compact('participante'));
    }

    public function store($participante)
    {
        $data = request()->all();
    	dd($participante, $data);
    }
}
