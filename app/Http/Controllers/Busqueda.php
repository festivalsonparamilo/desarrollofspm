<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests; 
use App\participante;
use App\auxiliar;


class Busqueda extends Controller
{
    public function oneParticipante()
    {
        $part = participante::all();
        return view('profile/prueba',compact('part'));

    }

    public function xID()
    {
    	$idp= participante::find('880883ce45');
    	dd($idp);
    }
    public function rel()
    {
    	$rel= participante::find('a3b1e269cd')->auxiliares;
    	dd($rel);
    }

}
