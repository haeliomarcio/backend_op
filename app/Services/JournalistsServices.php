<?php
namespace App\Services;

use App\Model\Journalists as Model;
use App\Http\Requests\JournalistsRequest as Request;

class JournalistsServices extends Services {
    
    public function __construct(Model $model, Request $request) {
        $this->model = $model;
        $this->request = $request;
    }

}