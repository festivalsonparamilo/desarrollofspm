<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class folio extends Model
{
    public $incrementing =false;
    protected $table = 'folios';
    protected $primaryKey = 'id_folio';
    
}
