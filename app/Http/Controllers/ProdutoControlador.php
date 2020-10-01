<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{
    public function __construct() // Função construct para proteger o controlador
    {
        $this->middleware('auth'); // Chama a middleware do auth, que faz a autentificação
    }

    public function index(){ // Lista de produtos criada quando chamar o index nas routes
        echo "<h4>Lista de produtos</h4>";
        echo "<ul>";
        echo "<li>Macarrão</li>";
        echo "<li>Feijão</li>";
        echo "<li>Carne Bovina</li>";
        echo "<li>Arroz</li>";
        echo "<li>Leite</li>";
        echo "</ul>";
    }
}
