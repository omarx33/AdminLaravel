<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //cambiar a true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'required|max:255', //obligatorio maxmimo 255
            'email' => 'required|email|max:255|unique:users', // obligatorio que sea tipo email y que sea unico no se repita
            'password' => 'min:6|confirmed' // que no sea obligatorio

        ];
    }
}
