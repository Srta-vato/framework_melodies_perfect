
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; 

class BuscadorController extends Controller
{
    public function buscarProductos(Request $request)
    {
        // Procesar la búsqueda
        if ($request->has('busqueda')) {
            $busqueda = $request->input('busqueda');

            // Consulta para buscar productos por nombre
            $resultados = Producto::where('nombre', 'like', '%' . $busqueda . '%')->get();

            if ($resultados->count() > 0) {
                return view('resultados', ['resultados' => $resultados]);
            } else {
                return view('sin_resultados');
            }
        }

        return view('buscador');
    }
}
