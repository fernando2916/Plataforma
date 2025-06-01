<?php

namespace App\Http\Controllers\Plataforma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiseñoController extends Controller
{
     public function index()
    {
        return view('plataforma.diseño.index');
    }
}
