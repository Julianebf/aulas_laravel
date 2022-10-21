<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main14 extends Controller
{
    public function home(){
       $usuarios = \App\Models\Usuarios::all();

       foreach ($usuarios as $usuario){
            echo $usuarios->nome. '<br>';
       }
    }
}
