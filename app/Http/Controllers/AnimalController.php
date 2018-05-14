<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Client;
use App\Models\Palpacao;
use Auth;
use App\User;

class AnimalController extends Controller
{
    public function index()
    {
        if($aux = Auth::user()){
            $user = $aux->id;
        }
        $animals = User::find($user)->animals;
        return view('animal/list-animals', compact('animals'));
    }

    public function create()
    {
        if($aux = Auth::user()){
            $user = $aux->id;
        }
        $clients = User::find($user)->clients;
        return view('animal/create-animal', compact('clients','user'));
    }

    public function store(Request $request)
    {
        $animal = new Animal;
        $animal->name = $request->name;
        $animal->breed = $request->breed;
        $animal->age = $request->age;
        $animal->register = $request->register;
        $animal->coat = $request->coat;
        $animal->annotations = $request->annotations;
        $animal->client_id = $request->client_id;
        $animal->user_id = $request->user_id;
        $animal->save();
        return redirect()->route('animal.index')->with('message', 'Animal Criado!');
    }

    public function show($idA){
        
        $animal = Animal::findOrFail($idA);
        $client = Animal::find($idA)->client;
        if($client->user_id == Auth::user()->id){
            return view('animal/list-animal-id', compact('animal', 'client'));
        }else
            return view('error-page');
    }

    public function edit($id)
    {

        $animal = Animal::findOrFail($id);
        $nameC = Animal::find($id)->client;
        if($aux = Auth::user()){
            $user = $aux->id;
        }
        $clients = User::find($user)->clients;
        if($animal->user_id == Auth::user()->id){
            return view('animal/edit-animal', compact('animal', 'clients', 'nameC'));
        }else
            return view('error-page');
        
    }

    public function update(Request $request, $id) {
        $animal = Animal::findOrFail($id);
        $animal->name = $request->name;
        $animal->breed = $request->breed;
        $animal->age = $request->age;
        $animal->register = $request->register;
        $animal->coat = $request->coat;
        $animal->annotations = $request->annotations;
        $animal->client_id = $request->client_id;
        $animal->user_id = $request->user_id;
        $animal->save();
        return redirect()->route('animal.index')->with('message', 'Editado com sucesso!');

    }

    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();
        return redirect()->route('animal.index')->with('message', 'Eliminado com sucesso!');
    }
}
