<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main13 extends Controller
{
    public function home(){
        $res = DB::table('usuarios')->select('nome', 'email')->get();
        $this->apresentar($res);
    }
}
