<?php

namespace App\Http\Controllers\Plataforma\Nosotros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
   
    public function index()
    {
        return view('plataforma.contacto.index');
    }
}
