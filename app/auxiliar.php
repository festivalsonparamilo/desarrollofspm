<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auxiliar extends Model
{
    public $incrementing =false;
    protected $table = 'auxiliars';
    protected $primaryKey = 'id_auxiliar';
    
    public function participante()
    {
    	return $this->belongsTo('App\participante','id_participante');
    }
}
