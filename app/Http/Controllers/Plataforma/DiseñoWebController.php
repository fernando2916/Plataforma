<?php

namespace App\Http\Controllers\Plataforma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiseñoWebController extends Controller
{
    public function index()
    {
        return view('plataforma.desarrollo.index');
    }
}
