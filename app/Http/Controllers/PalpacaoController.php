<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Client;
use App\Models\Palpacao;
use Auth;
use App\User;

class PalpacaoController extends Controller
{
    
    public function create($id)
    {
        $animal = Animal::findOrFail($id);
        $client = Animal::find($id)->client;
        if($client->user_id == Auth::user()->id){
            return view('palpacao/create-palpacao', compact('animal'));
        }else
            return view('error-page');
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
        $client = Animal::find($id)->client;
        if($client->user_id == Auth::user()->id){
            return view('palpacao/list-palpacoes', compact('animal','animalP'));
        }else
            return view('error-page');
    }
 
    public function edit($id)
    {   
        $palpacao = Palpacao::findOrFail($id);
        $animal = Palpacao::find($id)->animal;
        $client = Animal::find($animal->id)->client;
        if($client->user_id == Auth::user()->id){
            return view('palpacao/edit-palpacao', compact('palpacao', 'animal'));
        }else
            return view('error-page');
        
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
