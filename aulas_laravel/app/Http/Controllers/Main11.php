<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main11 extends Controller
{
    public function home(){
        echo '<pre>';
        $i = 0;
        DB::table('usuarios')->orderBy('id')->chunk(17, function($res){
            echo '<hr>';
            foreach($res as $usuario){
                echo $usuario->nome . '<br>';
            }
            echo '<hr>';

            global $i;
            $i++;
            if($i == 3){
                return false;
            }
        });
    }
}
