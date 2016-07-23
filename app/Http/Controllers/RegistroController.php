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
        switch ($participante) {
            case 'musicos':
                return view('regist/introMusico', compact('participante'));
                break;
            case 'tallerista':
                return view('regist/introTallerista', compact('participante'));
                break;
            case 'arte-gast':
                return view('regist/introArte-gast', compact('participante'));
                break;
            default:
                return view('errors/errorRegistro');
                break;
        }   	
    }

    public function condition($participante)
    {
        if ((strcmp($participante,'musicos') == 0) || (strcmp($participante,'arte-gast') == 0) || (strcmp($participante,'tallerista') == 0)) {
            return view('regist/condi', compact('participante'));
        }else {
            return view('errors/errorRegistro');
        }
    }

    public function forms($participante)
    {
        switch ($participante) {
            case 'musicos':
                return view('regist/form1', compact('participante'));
                break;
            case 'tallerista':
                return view('regist/form2', compact('participante'));
                break;
            case 'arte-gast':
                return view('regist/form3', compact('participante'));
                break;
            default:
                return view('errors/errorRegistro');
                break;
        } 
    }

    public function store($participante, $form)
    {
    	dd($participante,$form);
    }
}
