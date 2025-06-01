<?php

namespace App\Http\Controllers\Plataforma\Nosotros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VacantesController extends Controller
{
    public function index()
    {
        return view('plataforma.vacantes.index');
    }
}
