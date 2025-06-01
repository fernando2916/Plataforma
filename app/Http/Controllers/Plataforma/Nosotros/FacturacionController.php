<?php

namespace App\Http\Controllers\Plataforma\Nosotros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacturacionController extends Controller
{
    public function index()
    {
        return view('plataforma.facturacion.index');
    }
}
