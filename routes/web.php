<?php

//pagina inicio
use App\Http\Controllers\PaginasController;
Route::get('/mi-nueva-pagina', [PaginasController::class, 'mostrarBienvenida']);

//Ingreso
use App\Http\Controllers\RegistroController;
Route::post('/registrar-usuario', [RegistroController::class, 'registrarUsuario']);

//Primera intefaz
use App\Http\Controllers\BienvenidaController;
Route::get('/bienvenida', [BienvenidaController::class, 'mostrarBienvenida']);

//Busqueda de productos
use App\Http\Controllers\BuscadorController;
Route::get('/buscar-productos', [BuscadorController::class, 'buscarProductos']);

