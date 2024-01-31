<?php

// app/Http/Controllers/RegistroController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller
{
    public function registrarUsuario(Request $request)
    {
        $primer_nombre = $request->input('nombre');
        $apellido = $request->input('Apellido');
        $gmail = $request->input('email');
        $tipo_id = $request->input('ID');
        $numero_id = $request->input('NumID');
        $numero_celular = $request->input('telefono');
        $contrasena = bcrypt($request->input('pass'));

        try {
            DB::table('usuarios')->insert([
                'primer_nombre' => $primer_nombre,
                'apellido' => $apellido,
                'gmail' => $gmail,
                'tipo_id' => $tipo_id,
                'numero_id' => $numero_id,
                'numero_celular' => $numero_celular,
                'contrasena' => $contrasena,
            ]);

            return redirect('/mi-nueva-pagina')->with('success', 'Usuario registrado exitosamente');
        } catch (\Exception $e) {
            return redirect('/mi-nueva-pagina')->with('error', 'Error al registrar el usuario: ' . $e->getMessage());
        }
    }
}

