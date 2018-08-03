<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LogarController extends Controller
{

    public function login(Request $request)
    {

        $dadosValidos = $request->validate([

           'email' => 'required|min:3',
           'password' => 'required|min:6',

        ]);

        $dadosLogin = $request->only('email', 'password');

        if(Auth::attempt($dadosLogin)) {

            return Redirect::to('/painel')->with('alerta', 'Você está logado!');
        }

        return Redirect::back()->with('erro', 'Dados incorretos. Tente novamente');
    }

    public function sair()
    {
        Auth::logout();
        return Redirect::to('/');
    }

}
