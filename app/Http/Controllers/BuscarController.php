<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Palpacao;
use App\Models\Client;

class BuscarController extends Controller
{
    public function showAnimal(){
        $animal = Animal::all();
        $search = \Request::get('search');
        $animals = Animal::where('name', 'like', '%'.$search.'%')->get();
        return view('animal/list-animals', compact('animals'));
    }
    public function showClient(){
        $client = Client::all();
        $search = \Request::get('search');
        $clients = Client::where('name', 'like', '%'.$search.'%')->get();
        return view('client/list-clients', compact('clients'));
    }
}
