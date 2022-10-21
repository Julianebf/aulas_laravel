<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class Main20 extends Controller
{
    public function home(){
        $aluno = Aluno::find(1)->telefone;
    }
}
