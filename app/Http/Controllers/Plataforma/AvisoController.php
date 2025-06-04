<?php

namespace App\Http\Controllers\Plataforma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvisoController extends Controller
{
    public function index()
    {
        return view('plataforma.aviso.index');
    }
    public function resumen()
    {
        return view('plataforma.resumen.index');
    }
}
