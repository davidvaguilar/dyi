<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorreoElectronico extends Model
{
    protected $table = 'correo_electronicos';

    protected $fillable = [
        'persona_id', 'cuenta', 'pais','asunto', 'comentario', 'observacion'
    ];
}
