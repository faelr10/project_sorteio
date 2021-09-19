<?php

namespace App\Http\Controllers;

use App\Models\Sorteio;
use Illuminate\Http\Request;

class SorteioController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function create()
    {
        return view('sorteio.create');
    }

    public function store(Request $request)
    {

        $idvalor = $request->valor;

        if ($idvalor == 1) {
            $valor = 10;
        } else if ($idvalor == 2) {
            $valor = 20;
        } else {
            $valor = 50;
        };

        $idporcentagem = $request->porcentagem;

        if ($idporcentagem == 1) {
            $porcentagem = 5;
        } else if ($idporcentagem == 2) {
            $porcentagem = 10;
        } else if ($idporcentagem == 3) {
            $porcentagem = 15;
        } else if ($idporcentagem == 4) {
            $porcentagem = 20;
        } else {
            $porcentagem = 25;
        };

        $sorteio = new Sorteio();

        $sorteio->nome = $request->nome;
        $sorteio->quantidade = $request->quantidade;
        $sorteio->valor = $valor;
        $sorteio->porcentagem = $porcentagem;

        $sorteio->save();

        return redirect('/')->with('msg', 'Rifa Criada com Sucesso');;
    }

    public function perfil()
    {
        return view('perfil');
    }

    public function dashboard()
    {
        $resultados = Sorteio::all();
        return view('dashboard', ['resultados' => $resultados]);
    }

    public function show($id)
    {
        $resultados = Sorteio::findOrFail($id);
        $i = 0;

        return view('comprarrifa', ['i'=>$i,'resultados' => $resultados]);
    }

}
