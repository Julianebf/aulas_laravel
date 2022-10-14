<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main3 extends Controller
{
    public function home(){
        $data = [
            'titulo' => 'Pagina de teste' , 
            'texto' => 'Este é o texto',
            'valor' => 100,
            'nomes' => [
                'Joao', 'Carlos', 'Antonio', 'Sara'
            ]
            
        ];
        return view('home1', $data);
    }

    public function teste(){
        echo "Estou aqui";
    }
}

