<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests; 
use App\participante;


class Busqueda extends Controller
{
    public function oneParticipante()
    {
        $part = participante::all();
        return view('profile/prueba',compact('part'));
    }

}
