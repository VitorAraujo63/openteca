<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function loginView()
    {
        return view('cad&log/login');
    }

    public function login(Request $request)
    {
        $form = $request->all();
        dd($form);
    }


    public function cadastroView()
    {
        return view('cad&log/cadastro');
    }

    public function cadastro()
    {

    }


    public function contaView()
    {
        return view('conta');
    }

    public function conta()
    {
        
    }
}
