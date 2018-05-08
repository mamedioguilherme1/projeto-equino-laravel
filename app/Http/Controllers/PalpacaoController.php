<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Client;
use App\Models\Palpacao;

class PalpacaoController extends Controller
{
    public function index()
    {
        $palpacoes = Palpacao::all();
        return view('palpacao/list-palpacoes', compact('palpacoes'));
    }

    public function create($id)
    {
        $animal = Animal::find($id);
        return view('palpacao/create-palpacao', compact('animal'));
    }

    public function store(Request $request)
    {
        $palpacao = new Palpacao;
        $palpacao->date = $request->date;
        $palpacao->annotations = $request->annotations;
        $palpacao->stallion = $request->stallion;
        $palpacao->client_id = $request->client_id;
        $palpacao->animal_id = $request->animal_id;
        $palpacao->save();
        return redirect()->route('listarPalpacao', $palpacao->animal_id)->with('message', 'Palpação Criado!');
    }

    public function show($id){
        $animal = Animal::findOrFail($id);
        $animalP = Animal::find($id)->palpacoes;
        return view('palpacao/list-palpacoes', compact('animal','animalP'));
    }

    public function detalhe($id){
        $palpacao = Palpacao::findOrFail($id);
        return view('palpacao/list-palpacao-id', compact('palpacao'));
    }

    
    public function edit($id)
    {   
        $palpacao = Palpacao::findOrFail($id);
        return view('palpacao/edit-palpacao', compact('palpacao'));
    }

    public function update(Request $request, $id) {
        $palpacao = Palpacao::findOrFail($id);
        $palpacao->date = $request->date;
        $palpacao->annotations = $request->annotations;
        $palpacao->stallion = $request->stallion;
        $palpacao->client_id = $request->client_id;
        $palpacao->animal_id = $request->animal_id;
        $palpacao->save();
        return redirect()->route('listarPalpacaoId', $palpacao->id)->with('message', 'Editado com sucesso!');
    }
}
