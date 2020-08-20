<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function calculadora() {
        return view('calculadora');
    }

    public function solucion(Request $request) {
        $primertermino = (float)$request->input('primertermino');
        $segundotermino = (float)$request->input('segundotermino');

        
        $suma = $primertermino +  $segundotermino ;
        $resta = $primertermino -  $segundotermino ;
        $multiplicacion = $primertermino *  $segundotermino ;
        $division = $primertermino /  $segundotermino ;
        $potencia = pow($primertermino,   $segundotermino) ;

        return view('solucion', [
            'primertermino' => $primertermino,
            'segundotermino' => $segundotermino,
            'suma' => $suma,
            'resta' => $resta,
            'multiplicacion' => $multiplicacion,
            'division' => $division,
            'potencia' => $potencia,
        ]);
}
}