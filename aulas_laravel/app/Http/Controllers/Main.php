<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    // public function index(){
        // echo 'Estou no index!';
    // }

    // public function user(){
    //     echo 'Estou no user!';
    // }
    
    // public function mostrarNome(){
    //      return view('pagina2',['nome' => 'Juliane Bezerra']);
    //     }
    // public function user($nome, $apelido){
        
    //     return view('user', [
    //         'nome' => $nome,
    //         'apelido' => $apelido
    //     ]);
    // }

    // public function nome($nome, $idade,  $apelido = ''){
        
    //     return view('nome', [
    //         'nome' => $nome,
    //         'apelido' => $apelido,
    //         'idade' => $idade
    //     ]);
    // }

    public function home(){
        echo'<h3>HOME<h3>';
        echo '<hr>';
        echo '<a href="'.route('inicio').'">Home</b><br>';
        echo '<a href="'.route('servicos').'">Servicos</b><br>';
        echo '<a href="'.route('contatos').'">Contatos</b><br>';
    }

    public function servicos(){
        echo'<h3>SERVICOS<h3>';
        echo '<hr>';
        echo '<a href="'.route('inicio').'">Home</b><br>';
        echo '<a href="'.route('servicos').'">Servicos</b><br>';
        echo '<a href="'.route('contatos').'">Contatos</b><br>';
    }

    public function contatos(){
        echo'<h3>CONTATOS<h3>';
        echo '<hr>';
        echo '<a href="'.route('inicio').'">Home</b><br>';
        echo '<a href="'.route('servicos').'">Servicos</b><br>';
        echo '<a href="'.route('contatos').'">Contatos</b><br>';
    }
}
