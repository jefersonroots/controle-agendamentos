<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function toObject(): object
    {
        return json_decode(json_encode($this->validated()));
    }
    

}
