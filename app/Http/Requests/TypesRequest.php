<?php

namespace App\Http\Requests;

use App\Model\Types;

class TypesRequest extends Validation
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $this->messageAuthorization = 'Você não tem autorização para editar este registro.';
        if(isset($this->data['id']) && !empty($this->data['id'])) {
            $result = Types::where('id', $this->data['id'])->where('journalist_id', auth()->user()->id)->get()->first();
            if($result) {
                return true;
            } else {
                return false;
            }
        }
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
            'journalist_id' => 'required',
            'name' => 'required',
        ];
    }

    public function fields(){
        return [
            'journalist_id' => 'Jornalista',
            'name' => 'Nome',
        ];
        
    }
}
