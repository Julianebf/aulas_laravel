<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main5 extends Controller
{
    public function home3(){
        $data = [
            'titulo' => 'Pagina de teste' , 
            'texto' => 'Este é o texto',
            'valor' => 100,
            'nomes' => [
                'Joao', 'Carlos', 'Antonio', 'Sara'
            ]
            
        ];
        return view('home3', $data);
    }
}
