<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Models\Cliente as ModelsCliente;

class Main18 extends Controller
{
    public function home(){
      $cliente = ModelsCliente::find(5);
      $cliente->delete();
      

    }
}
