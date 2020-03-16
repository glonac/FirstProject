<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchoolRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' =>'required|alpha',
            'email' =>'required|email',
            'telefon' =>'required|numeric|size:11'
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'Поле "Имя" является обязательным',
            'email.required' =>'Поле "Email" является обязательным',
            'telefon.required' =>'Поле "Номер телефона" является обязательным',
            'email.email '=>'Введен некорректный email',
            'name.alpha '=>'В поле "Имя" не могут быть только буквы',
            'telefom.numeric '=>'Введен некорректный номер'
        ];
    }
}
