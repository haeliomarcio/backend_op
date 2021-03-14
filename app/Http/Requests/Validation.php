<?php
namespace App\Http\Requests;

use Illuminate\Support\Facades\Validator;

class Validation {

    protected $messageAuthorization = '';
    protected $data = [];

    public function validation($request, $id = ''){

        $this->data = $request->all();
        if(!$this->authorize()) {
            return response()->json(['message' => $this->messageAuthorization], 422);
        }

        $validator = Validator::make($request->all(), $this->rules($id), [], $this->fields());
        return $validator;
    }

    public function rules()
    {
        return [];
    }

    public function fields(){
        return [];
    }

    public function authorize() {
        return true;
    }
}