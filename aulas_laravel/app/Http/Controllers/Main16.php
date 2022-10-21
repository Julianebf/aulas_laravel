<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main16 extends Controller
{
    public function home(){
    
       $res = Usuarios::where('id', '>', 290)->max('pontuacao');
        echo $res;
       die();
       echo "$res->nome - $res->email - $res->pontuacao";

     
    }
}
