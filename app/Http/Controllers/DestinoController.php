<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinos;

class DestinoController extends Controller
{
    public function index()
    {
        $destinos = Destinos::all();
        return view('destinos', compact('destinos'));
    }
}
