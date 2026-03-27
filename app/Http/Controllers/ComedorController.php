<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComedorController extends Controller
{
    public function index()
    {
        return view('comedor.index');
    }

    public function registro()
    {
        return view('comedor.registro');
    }

    public function menu()
    {
        return view('comedor.menu');
    }

    public function alergias()
    {
        return view('comedor.alergias');
    }

    public function proveedores()
    {
        return view('comedor.proveedores');
    }

    public function documentos()
    {
        return view('comedor.documentos');
    }

    public function contactanos()
    {
        return view('comedor.contactanos');
    }
}