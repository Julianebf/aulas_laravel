<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clientes1 extends Controller
{
    private $clientes = [
        [
            'nome' => 'Joao',
            'email' => 'joao@gmail.com'
        ],
        [
            'nome' => 'Ana',
            'email' => 'ana@gmail.com'
        ],
        [
            'nome' => 'Carlos',
            'email' => 'carlos@gmail.com'
        ],
    ];

    public function client($index = 0){
        echo "Nome: {$this->clientes[$index]['nome']}";
    }
}
