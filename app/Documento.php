<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    //
    public function tramite()
    {
    	return $this->belongsTo('App\Tramite','tramite_id','id');
    }
}
