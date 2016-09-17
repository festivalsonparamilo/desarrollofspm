<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class participante extends Model
{    
    public $incrementing =false;
    protected $table = 'participantes';
    protected $primaryKey = 'id_participante';

   public function auxiliares()
   {
   	 return $this->hasMany('App\auxiliar','id_participante');
   }
}
