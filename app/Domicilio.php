<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    protected $table = 'domicilios';

    protected $fillable = [
        'persona_id', 'calle', 'departamento','poblacion', 'ciudad', 'comuna', 'region',
                'pais','descripcion'
    ];

    public function personas(){
        return $this->hasMany('App\Persona');
    }
}
