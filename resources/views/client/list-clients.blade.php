@extends('template.app')

@section('title', 'Adicionar Cliente')

@section('sidebar')
    @parent

@endsection

@section('content')
<h2>Lista de Clientes</h2>
<a href="{{route('client.create')}}"><button class="btn btn-success">Adicionar</button></a>
<div class="table-responsive table-adjust">
  <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>CPF</th>
        <th>Email</th>
      </tr>
    </thead>
    @foreach($clients as $client)
    <tbody>
      <tr onclick="location.href = '{{route('client.show', $client->id)}}'">
        <td>{{$client->name}}</td>
        <td>{{$client->cellphone}}</td>
        <td>{{$client->address}}</td>
        <td>{{$client->cpf}}</td>
        <td>{{$client->email}}</td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>

<script>
@endsection