<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main12 extends Controller
{

    public function home(){
        $res = DB::table('usuarios')->where('pontuacao', 1000)->exists();

        if($res){
            echo 'existe';
        } else {
            echo 'nao existe';
        }

        echo '<pre>';
        print_r($res);

    }
    private function criar(){
        DB::statement("TRUNCATE usuarios");
        $num_rows = 300;
        $sql = "INSERT INTO usuarios VALUES";
        for($i=1; $i<=$num_rows;$i++){
            $sql .="(0'nome $i', 'email$i@gmail.com'),";
        }
        $sql = rtrim($sql, ',');
        DB::insert($sql);
    }
}
