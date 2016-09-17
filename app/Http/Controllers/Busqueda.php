<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests; 
use App\participante;
use App\auxiliar;
use App\folio;


class Busqueda extends Controller
{
    public function oneParticipante()
    {
        $part = participante::all();
        return view('profile/prueba',compact('part'));

    }

    public function participante($idpart)
    {
        $participante[]= participante::find($idpart);
        // dd($participante);
        return view('busquedas/participante', compact('participante'));
    }

    public function auxiliar($idaux)
    {
        if ( strlen($idaux) == 10) {
            $auxiliares= auxiliar::where('id_participante','like', '%'.$idaux.'%')->get();
            return view('busquedas/auxiliares', compact('auxiliares'));
        }else{
            $auxiliar[] = auxiliar::find($idaux);
            return view('busquedas/auxiliar', compact('auxiliar'));
        }
    }

    public function name($nombre)
    {
        $byname= participante::where('nombre','like','%'.$nombre.'%')->get();
        dd($byname);
    }//busqueda aproximada de nombre participante

    public function xmail($mail)
    {
        $byname= participante::where('e_mail','like', $mail)->get();
        dd($byname);
    }//busqueda aproximada de nombre participante

    public function buscar()
    {
        include "UnsafeCrypto.php";
        $aux = request()->input('buscar');
        if ( strpos($aux, '@')>0 ){

            $participante= participante::where('e_mail','=', $aux)->get();
            return view('busquedas/participante', compact('participante'));
        }
        elseif ( strlen($aux) == 10 ) {
            $cifrado = folio::find($aux);
            if($cifrado==NULL)
            {
                $participantes= participante::find($aux);
                
                if($participantes==NULL)
                {
                $byname10= participante::where('nombre','like', '%'.$aux.'%')->get();
                $byname10x= auxiliar::where('nombre_aux','like', '%'.$aux.'%')->get();
                $expositores=array('Participantes'=>$byname10,'Auxiliares'=>$byname10x);
                return view('busquedas/partAux', compact('expositores'));
                }
                $participante[] = $participantes;
                return view('busquedas/participante', compact('participante'));
            }
            $cad = $cifrado->cadena;
            $idPart=UnsafeCrypto::decrypt($cad, hex2bin(UnsafeCrypto::strToHex($aux)), true);
            //dd($idPart);
            $idPart = substr($idPart, 0, 10);
            $participante[]= participante::find($idPart);
            return view('busquedas/participante', compact('participante'));
        }elseif ( strlen($aux) == 15) {
            $rel= auxiliar::find($aux);
            
            if($rel ==NULL)
            {
                 $byname15= participante::where('nombre','like', '%'.$aux.'%')->get();
                 $byname15x= auxiliar::where('nombre_aux','like', '%'.$aux.'%')->get();
                 $expositores=array('Participantes'=>$byname15,'Auxiliares'=>$byname15x);
                 return view('busquedas/partAux', compact('expositores'));
            }
            $auxiliar[] = $rel;
            return view('busquedas/auxiliar', compact('auxiliar'));
            

        }else{


            $byname= participante::where('nombre','like','%'.$aux.'%')->get();
            $bynamex= auxiliar::where('nombre_aux','like','%'.$aux.'%')->get();
            $expositores=array('Participantes'=>$byname, 'Auxiliares'=>$bynamex);
            return view('busquedas/partAux', compact('expositores'));
        }
    }


}
