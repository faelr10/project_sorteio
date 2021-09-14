<?php

namespace App\Http\Controllers;

use App\Models\Sorteio;
use Illuminate\Http\Request;

class SorteioController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function create(){
        return view('sorteio.create');
    }

    public function store(Request $request){
        
        $sorteio = new Sorteio();

        $sorteio->nome = $request->nome;
        $sorteio->quantidade = $request->quantidade;
        $sorteio->valor = $request->valor;
        $sorteio->porcentagem = $request->porcentagem;

        $sorteio->save();

        return redirect('/')->with('msg', 'Rifa Criada com Sucesso');;
    }
}
