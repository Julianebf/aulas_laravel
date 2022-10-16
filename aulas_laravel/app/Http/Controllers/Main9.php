<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Main9 extends Controller
{
    public function home(){
        
        $results = DB::table('usuarios')->where('id','<=',3)->first();

        dd($results);

    }
}
