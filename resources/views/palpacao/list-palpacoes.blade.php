@extends('template.app')

@section('title', 'Lista Palpações')

@section('sidebar')
    @parent

@endsection

@section('content')
<h2>Lista de Palpações</h2>
<a href="{{route('palpacao.index')}}"><button class="btn btn-success">Adicionar</button></a>
<div class="table-responsive table-adjust">
  <table class="table">
    <thead>
      <tr>
        <th>Data Palpação</th>
        <th>Proprietário</th>
        <th>Animal</th>
        <th>Observações</th>
        <th>Garanhão</th>
      </tr>
    </thead>
    @foreach($palpacoes as $palpacao)
    <tbody>
      <tr onclick="location.href = '{{route('palpacao.show', $palpacao->id)}}'">
        <td>{{date('d F Y', strtotime($palpacao->data))}}</td>
        <td>{{$palpacao->client->name}}</td>
        <td>{{$palpacao->animal->name}}</td>
        <td>{{$palpacao->annotations}}</td>
        <td>{{$palpacao->stallion}}</td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>

<script>
@endsection