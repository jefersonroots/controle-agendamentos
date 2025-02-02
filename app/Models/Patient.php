<?php

namespace App\Models;


use App\Models\BaseModel;
use App\Models\Consultation;

class Patient extends BaseModel
{
    protected $fillable = [
        'id',
        'name',
        'cpf',
        'celular',    
    ];

    public function consultations()
    {
        return $this->hasMany(Consultation::class, 'paciente_id', 'id');
    }
}
