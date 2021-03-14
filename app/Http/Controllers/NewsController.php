<?php

namespace App\Http\Controllers;

use App\Services\NewsServices as Services;

class NewsController extends Controller
{
    public function __construct(Services $services) {
        $this->services = $services;
    }

    public function type($type_id) {
        return $this->services->type($type_id);
    }
}
