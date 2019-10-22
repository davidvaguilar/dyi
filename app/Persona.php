<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    protected $fillable = [
        'tipo_documento', 'numero_documento', 'pasaporte','apodo', 'nombre', 'paterno', 'materno',
                'sexo', 'fecha_nacimiento', 'imagen'
    ];
}
