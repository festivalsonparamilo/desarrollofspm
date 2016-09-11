<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\*;
use App\Http\Requests; 
use App\participante;


class Busqueda extends Controller
{
    public function oneParticipante()
    {
        $part = participante::all();
        //return view('profile/prueba',compact('part'));
        dd($part);
    }

    public function name($nombre)
    {
    	$namep = participante::where('nombre', 'like', '%'.$nombre.'%')->get();
    	dd($namep);
    }

    public function xmail($mail)
    {
    	$mailp=participante::where('e_mail', '=',$mail)->get();
    	dd($mailp);
    }

    public function withaux()
    {
    	$queryto=DB::table('participantes')
            ->join('auxiliars', 'participantes.id_participante', '=', 'auxiliars.id_partcipante')
            ->select('participantes.id_participante', 'auxiliars.id_auxiliar')
            ->get();
    	dd($queryto);
    }


}
