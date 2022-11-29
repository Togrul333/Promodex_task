<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'firstname'             =>  'required|string|max:60',
            'lastname'              =>  'required|string|max:60',
            'email'                 =>  'required|string|max:60',
            'password'              =>  'required|string|confirmed',
        ];
    }
    public function messages()
    {
        return [
            'firstname.required'              => 'Не заполнено',
            'lastname.required'               => 'Не заполнено',
            'email.required'                  => 'Не заполнено',
            'password.required'               => 'Не заполнено',
        ];
    }
}
