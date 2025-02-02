<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Models\Doctor;
use App\Models\Patient;

class Consultation extends BaseModel
{
    protected $fillable = [
        'id',
        'medico_id',
        'paciente_id',
        'data',    
    ];

    public function medico()
    {
        return $this->belongsTo(Doctor::class, 'medico_id', 'id');
    }

    public function paciente()
    {
        return $this->belongsTo(Patient::class, 'paciente_id', 'id');
    }
}
