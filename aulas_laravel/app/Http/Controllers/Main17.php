<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Models\Cliente as ModelsCliente;

class Main17 extends Controller
{
    public function home(){
      $cliente = new ModelsCliente();
      $cliente->nome = "João";
      $cliente->email = "teste@teste.com";

      $cliente = ModelsCliente::find(2);
      $cliente->delete();

      echo 'OK';

    }
}
