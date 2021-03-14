<?php

namespace App\Http\Controllers;

use App\Services\TypesServices as Services;

class TypesController extends Controller
{
    public function __construct(Services $services) {
        $this->services = $services;
    }
   
}
