<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipios;

class MunicipiosController extends Controller
{
    public function index()

    {
        $municipios = Municipios::all();
        return view('municipios', compact('municipios'));
    }
}
