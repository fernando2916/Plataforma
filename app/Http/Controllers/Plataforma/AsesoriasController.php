<?php

namespace App\Http\Controllers\Plataforma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AsesoriasController extends Controller
{
     public function index()
    {
        return view('plataforma.asesorias.index');
    }
}
