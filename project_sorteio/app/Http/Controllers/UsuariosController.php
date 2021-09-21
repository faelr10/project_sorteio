<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function cadastro(){
        return view('cadastro');
    }

    public function store(Request $request){

        $dados = $request->all();
        $dados['senha'] = bcrypt($dados['senha']);
        Usuario::create($dados);

        return redirect('/')->with('msg', 'Rifa Criada com Sucesso');

    }

    public function login(){
        return view('login');
    }

    public function logar(Request $request)
    {
        $dados = $request->all();

        $email = $dados['email'];
        $login = $dados['email'];
        $senha = $dados['senha'];

        $usuario = Usuario::where('login', $login)->first();

        if(Auth::check() || ($usuario && Hash::check($senha, $usuario->senha))){
            Auth::login($usuario);
            return redirect(route('welcome'));
        } else {
            return redirect(route('login'));
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('welcome'));
    }


}
