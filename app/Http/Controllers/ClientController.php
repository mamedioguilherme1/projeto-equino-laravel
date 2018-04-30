<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('client/list-clients', compact('clients'));
    }

    public function create()
    {
        return view('client/create-client');
    }

    public function store(Request $request)
    {
        $client = new Client;
        $client->name = $request->name;
        $client->address = $request->address;
        $client->cellphone = $request->cellphone;
        $client->cpf = $request->cpf;
        $client->email = $request->email;
        $client->save();
        return redirect()->route('client.index')->with('message', 'Cliente Criado!');
    }

    public function show($id){
        $client = Client::findOrFail($id);
        return view('client/list-client-id', compact('client'));
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('client/edit-client', compact('client'));
    }

    public function update(Request $request, $id) {
        $client = Client::findOrFail($id);
        $client->name = $request->name;
        $client->address = $request->address;
        $client->cellphone = $request->cellphone;
        $client->cpf = $request->cpf;
        $client->email = $request->email;
        $client->save();
        return redirect()->route('client.index')->with('message', 'Editado com sucesso!');

    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect()->route('client.index')->with('message', 'Eliminado com sucesso!');
    }
}
