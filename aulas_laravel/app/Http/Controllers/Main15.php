<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main15 extends Controller
{
    public function home(){
    
       $resultados = Usuarios::all();
       $resultados = Usuarios::all()->count();

       $resultados = Usuarios::where('pontuacao',20)->get();
       echo $resultados[0]->email;
       die();
       echo '<pre>';
       print_r($resultados);
    }
}
