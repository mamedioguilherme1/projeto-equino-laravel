<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Client;
use App\User;

class ClientController extends Controller
{
    public function index()
    {
        if($aux = Auth::user()){
            $user = $aux->id;
        }
        $clients = User::find($user)->clients;
        return view('client/list-clients', compact('clients'));
    }

    public function create()
    {
        if($aux = Auth::user()){
            $user = $aux->id;
        }
        return view('client/create-client', compact('user'));
    }

    public function store(Request $request)
    {
        $client = new Client;
        $client->name = $request->name;
        $client->address = $request->address;
        $client->cellphone = $request->cellphone;
        $client->cpf = $request->cpf;
        $client->email = $request->email;
        $client->user_id = $request->user_id;
        $client->save();
        return redirect()->route('client.index')->with('message', 'Cliente Criado!');
    }

    public function show($id){
        $client = Client::findOrFail($id);
        if($client->user_id == Auth::user()->id){
            return view('client/list-client-id', compact('client'));
        }else
            return view('error-page');
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        if($client->user_id == Auth::user()->id){
            return view('client/edit-client', compact('client'));
        }else
            return view('error-page');
    }

    public function update(Request $request, $id) {
        $client = Client::findOrFail($id);
        $client->name = $request->name;
        $client->address = $request->address;
        $client->cellphone = $request->cellphone;
        $client->cpf = $request->cpf;
        $client->email = $request->email;
        $client->user_id = $request->user_id;
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
