<?php
namespace App\Services;

use App\Model\News as Model;
use App\Http\Requests\NewsRequest as Request;

class NewsServices extends Services {
    
    public function __construct(Model $model, Request $request) {
        $this->model = $model;
        $this->request = $request;
    }

    public function type($type_id) {
        $data = $this->model->where('type_id', $type_id)->get();
        return response()->json($data);
    }
    
}