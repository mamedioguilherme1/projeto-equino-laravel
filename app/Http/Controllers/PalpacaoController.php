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
}
