<?php

namespace App\Http\Controllers\Plataforma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TerminosController extends Controller
{
    public function index()
    {
        return view('plataforma.terminos.index');
    }
}
