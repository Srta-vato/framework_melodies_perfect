<?php
// app/Http/Controllers/PaginasController.php
namespace App\Http\Controllers;

class PaginasController extends Controller
{
    public function mostrarBienvenida()
    {
        return view('bienvenida');
    }
}

