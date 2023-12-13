<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalesTakeliController extends Controller
{
    public function getJugadores()
    {
        $jugadores = [
            [
                'nombre' => 'Ter Stegen',
                'posicion' => 'Portero'
            ],
            [
                'nombre' => 'Joao Cancelo',
                'posicion' => 'Defensa'
            ],
            [
                'nombre' => 'Iñigo Martín',
                'posicion'=> 'Defensa'
            ],
            [
                'nombre' => 'Gavi',
                'posicion' => 'Centrocampista'
            ],
            [
                'nombre' => 'Ferran Torres',
                'posicion' => 'Delantero'
            ],
            [
                'nombre' => 'Messi',
                'posicion' => 'Animal'
            ]
        ];

        return response()->json(['mensaje' => 'Estos son algunos jugadores', 'datos' => $jugadores]);
    }
}
    // public function getAnimales(){
    //     $animales = ['Takeli', 'Leon', 'Gacela', ' Hiena', 'Simba'];
    //     return response()->json(['mensaje'=>'Estos son los animales', 'datos'=> $animales]);
    // }

