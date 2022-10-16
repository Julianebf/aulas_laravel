<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuarios;

class Main8 extends Controller
{
    public function home(){
        $usuarios = new Usuarios();
        $resultados = $usuarios->buscar_todos_usuarios();

    }
}
