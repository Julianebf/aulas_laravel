<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main6 extends Controller
{
    public function home4(){

        $usuarios = DB::select("SELECT * FROM usuarios");
        echo '<pre>';

        foreach($usuarios as $usuario){
            echo '<p>'.$usuario->id.'</p>';
            echo '<p>'.$usuario->nome.'</p>';
        }
    }
}
