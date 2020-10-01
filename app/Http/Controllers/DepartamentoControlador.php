<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartamentoControlador extends Controller
{
    public function index(){
        echo "<h4>Lista de Categorias</h4>";
        echo "<ul>";
        echo "<li>Alimentos</li>";
        echo "<li>Eletrônicos</li>";
        echo "<li>Móveis</li>";
        echo "<li>Informática</li>";
        echo "</ul>";

        if (Auth::check()){ // Utiliza Auth::check para saber se o usuário está logado
            $user = Auth::user(); // Recupera as informações do usuário e guarda na variável $user
            echo "<hr>";
            echo "<h4>Você está logado</h4>"; 
            echo "<p>" . $user->nome . "</p>"; // Mostra na tela o nome do usuário
            echo "<p>" . $user->email . "</p>"; // Mostra na tela o email do usuário
            echo "<p>" . $user->id . "</p>"; // Mostra na tela o id do usuário
        }
        else{ // Senão estiver logado, mostra essa msg
            echo "<h4>Você não está logado</h4>";
        }

    }
}
