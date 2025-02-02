<?php 

namespace App\Models;

use App\Models\BaseModel;
use App\Models\Address\City;
use App\Models\Consultation;

class Doctor extends BaseModel
{
    protected $fillable = [
        'id',
        'nome',
        'especialidade',
        'cidade_id',         
    ];

    public function cities()
    {
        return $this->belongsTo(City::class, 'cidade_id', 'id');
    }

    public function consultations()
    {
        return $this->hasMany(Consultation::class, 'medico_id', 'id');
    }
}