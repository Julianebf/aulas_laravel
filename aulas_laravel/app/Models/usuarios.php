<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;

class Usuarios{
    public function teste(){
        return 'OK!';
    }

    public function buscar_todos_usuarios(){
       $resultados = DB::select("SELECT * FROM usuarios");
       return $resultados;
    }

    public function buscar_usuarios($nome){
        $params = [
            'nome' => $nome
        ];

        $resultados = DB::select("SELECT * FROM usuarios WHERE nome = :nome", $params);
        return $resultados;
    }

    public function busca_nomes(){
       return DB::select("SELECT nome FROM usuarios");
    }
}
?>