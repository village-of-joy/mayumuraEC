<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(Bases $base)
    {
        return $base->get();
    }
}
