@extends('template.app')

@section('title', 'Palpação Animal')

@section('sidebar')
    @parent

@endsection

@section('content')
<div class="row form-row col-md-8 col-xs-12 col-sm-12 col-lg-12 ajuste-div">
  <h2>Detalhe da palpação</h2>
  <h3>{{$palpacao->animal->name}}</h3>
  <div class="list-group">
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">Dono do Animal</h4>
      <p class="list-group-item-text">{{$palpacao->client->name}}</p>
    </a>
  </div>
  <div class="list-group">
    <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">Data Palpação</h4>
    <p class="list-group-item-text">{{date('d F Y', strtotime($palpacao->date))}}</p>
    </a>
  </div>
  <div class="list-group">
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">Garanhão</h4>
      <p class="list-group-item-text">{{$palpacao->stallion}}</p>
    </a>
  </div>
  <div class="list-group">
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">Observações</h4>
      <p class="list-group-item-text">{{$palpacao->annotations}}</p>
    </a>
  </div>
  <a href="{{route('editarPalpacao',$palpacao->id)}}" class="btn btn-warning" role="button">Editar</a>
  <a href="{{route('listarPalpacao', $palpacao->animal->id)}}" class="btn btn-success" role="button">Voltar</a>                                            
</div>
@endsection