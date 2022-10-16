<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main10 extends Controller
{
    public function home(){
        $res = DB::table('usuarios')->where('id', 2)->get();
        $res = DB::table('usuarios')->find(2);

        echo '<pre>';
        print_r($res);
    }
}
