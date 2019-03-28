<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juegos extends Model
{
    
    public function juegos
    {
        return $this->belongTo(user::class);
    }

    //agregar ruta de documentos
}
