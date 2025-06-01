<?php

namespace App\Http\Controllers\Plataforma\Nosotros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    public function index()
    {
        return view('plataforma.nosotros.index');
    }
}
