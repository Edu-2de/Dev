<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
    public function calcular(Request $request)
    {
        $valor = $request->input('valor_hora');
        $horas = $request->input('total_horas');

        $resultado = $valor * $horas;

        return view('resultado', [
            'v' => $valor,
            'h' => $horas,
            'total' => $resultado
        ]);
    }

    public function mostrarFormulario()
    {
        return view('formulario');
    }
}
