<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cliente extends Controller
{
    public function index(){
        echo 'Clientes';
    }

    public function nomes(){
        //echo 'Clientes - nomes';
        $this->email();
    }

    private function email(){
        echo 'email do cliente';
    }
}
