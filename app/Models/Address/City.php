<?php

namespace App\Models\Address;

use App\Models\BaseModel;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Relations\HasMany;


class City extends BaseModel
{
    protected $fillable = [
        'id',
        'nome',
        'estado',    
    ];

    public function doctors(): HasMany
    {
        return $this->hasMany(Doctor::class, 'cidade_id', 'id');
    }

}
