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
        $palpacao->ovario = $request->ovario;
        $palpacao->tam_foliculo = $request->tam_foliculo;
        $palpacao->carac_foliculo = $request->carac_foliculo;
        $palpacao->cl_dias = $request->cl_dias;
        $palpacao->cl_tipo = $request->cl_tipo;
        $palpacao->ut_edema = $request->ut_edema;
        $palpacao->ut_liquido = $request->ut_liquido;
        $palpacao->ut_prenhez = $request->ut_prenhez;
        $palpacao->injetaveis = $request->injetaveis;
        $palpacao->inj_quantidade = $request->inj_quantidade;
        $palpacao->procedimento = $request->procedimento;
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
 
    public function edit($id)
    {   
        $palpacao = Palpacao::findOrFail($id);
        $animal = Palpacao::find($id)->animal;
        return view('palpacao/edit-palpacao', compact('palpacao', 'animal'));
    }

    public function update(Request $request, $id) {
        $palpacao = Palpacao::findOrFail($id);
        $palpacao->date = $request->date;
        $palpacao->ovario = $request->ovario;
        $palpacao->tam_foliculo = $request->tam_foliculo;
        $palpacao->carac_foliculo = $request->carac_foliculo;
        $palpacao->cl_dias = $request->cl_dias;
        $palpacao->cl_tipo = $request->cl_tipo;
        $palpacao->ut_edema = $request->ut_edema;
        $palpacao->ut_liquido = $request->ut_liquido;
        $palpacao->ut_prenhez = $request->ut_prenhez;
        $palpacao->injetaveis = $request->injetaveis;
        $palpacao->inj_quantidade = $request->inj_quantidade;
        $palpacao->procedimento = $request->procedimento;
        $palpacao->stallion = $request->stallion;
        $palpacao->client_id = $request->client_id;
        $palpacao->animal_id = $request->animal_id;
        $palpacao->save();
        return redirect()->route('listarPalpacao', $palpacao->animal_id)->with('message', 'Editado com sucesso!');
    }
}
