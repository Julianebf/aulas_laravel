<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clientes2 extends Controller
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

    public function clients($dado, $index = 0){
        echo $this->clientes[$index][$dado];
    }
}
