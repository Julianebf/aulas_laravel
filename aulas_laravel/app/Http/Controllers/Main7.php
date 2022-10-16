<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main7 extends Controller
{
    public function home(){
        
        $parametros = [
            'Joao'
        ];


        $usuarios = DB::select("SELECT * FROM usuarios WHERE nome = ?", $parametros);
        dd($usuarios);

        $parametros = [
           'n' => 'Joao'
        ];


        $usuarios = DB::select("SELECT * FROM usuarios WHERE nome = ?", $parametros);
        dd($usuarios);

        DB::update("UPDATE usuarios SET nome = 'Maria' WHERE nome = 'Ana'");

    }
}
