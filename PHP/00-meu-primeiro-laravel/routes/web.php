<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrcamentoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/novo-orcamento', [OrcamentoController::class, 'mostrarFormulario']);

Route::post('/calcular', [OrcamentoController::class, 'calcular']);
