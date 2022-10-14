<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main1 extends Controller
{
    public function home(){
        $data = [
            'nome' => 'Heitor' , 
            'apelido' => 'Moreno',
            'idade' => 46,
            'telefones' => [
                '12345345',
                '131441424',
                '7566446646'
            ]
            
        ];
        return view('home', $data);
    }
}
