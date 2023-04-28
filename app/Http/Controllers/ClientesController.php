<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Usuarios::all();
        return view('clientes', compact('clientes'));
    }
}
