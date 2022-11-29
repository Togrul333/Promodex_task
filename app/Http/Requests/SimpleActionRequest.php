<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SimpleActionRequest extends FormRequest
{
    public function rules()
    {
        return [
            'id'            =>  'required|numeric',
        ];
    }
}
