<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotificationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name'             =>  'required|string|max:60',
            'period'           =>  'required|numeric',
            'input_1'          =>  'required|string',
            'input_2'          =>  'required|string',
            'input_3'          =>  'required|string',
            'settings'         =>  'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'              => 'Не заполнено',
            'period.required'            => 'Не заполнено',
            'input_1.required'           => 'Не заполнено',
            'input_2.required'           => 'Не заполнено',
            'input_3.required'           => 'Не заполнено',
            'settings.required'          => 'Не заполнено',
        ];
    }
}
