<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clientes extends Controller
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



    public function cliente($index){
        if($index >= 0 && $index <= 2){
            $this->clienteDetail($index);
        } else{
            echo 'Não existe o cliente escolhido.';
        }
    }

    private function clienteDetail($index){
        echo 'Nome: ' . $this->clientes[$index]['nome'].'<br> Email: ' . $this->clientes[$index]['email'].'<br>';
    }
}
