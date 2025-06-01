<?php

namespace App\Http\Controllers\Plataforma\Nosotros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnviosController extends Controller
{
    public function index()
    {
        return view('plataforma.envios.index');
    }
}
