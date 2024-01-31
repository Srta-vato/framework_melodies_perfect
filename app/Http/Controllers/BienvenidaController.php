<?php

// app/Http/Controllers/BienvenidaController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienvenidaController extends Controller
{
    public function mostrarBienvenida()
    {
        return view('bienvenida');
    }
}

