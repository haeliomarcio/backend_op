<?php
namespace App\Services;

use App\Model\Types as Model;
use App\Http\Requests\TypesRequest as Request;

class TypesServices extends Services {
    
    public function __construct(Model $model, Request $request) {
        $this->model = $model;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->model->where('journalist_id', auth()->user()->id)->get();
        return response()->json($data);
    }

}