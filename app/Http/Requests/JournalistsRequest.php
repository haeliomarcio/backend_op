<?php

namespace App\Http\Requests;

class JournalistsRequest extends Validation
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
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:journalists',
            'password' => 'required',
        ];
    }

    public function fields(){
        return [
            'name' => 'Nome',
            'lastname' => 'Sobrenome',
            'email' => 'E-mail',
            'password' => 'Senha',
        ];
        
    }
}
