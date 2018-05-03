<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Client;
use App\Models\Palpacao;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('animal/list-animals', compact('animals','clients'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('animal/create-animal', compact('clients'));
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
        $animal->save();
        return redirect()->route('animal.index')->with('message', 'Animal Criado!');
    }

    public function show($idA){
        $animal = Animal::findOrFail($idA);
        $client = Animal::find($idA)->client;
        return view('animal/list-animal-id', compact('animal', 'client','palpacao'));
    }

    public function edit($id)
    {
        $animal = Animal::findOrFail($id);
        $clients = Client::all();
        $nameC = Animal::find($id)->client;
        return view('animal/edit-animal', compact('animal', 'clients', 'nameC'));
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
