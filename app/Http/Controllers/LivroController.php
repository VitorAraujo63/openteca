<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function livrosView()
    {
        return view ('livros');
    }

    public function livros()
    {

    }


    public function pesquisaView()
    {
        return view ('pesquisa');
    }

    public function pesquisa()
    {

    }


    public function infolivroView()
    {
        return view ('info-livro');
    }

    public function infolivro()
    {
        
    }
}
