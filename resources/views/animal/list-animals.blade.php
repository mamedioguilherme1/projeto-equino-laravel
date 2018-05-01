@extends('template.app')

@section('title', 'Lista de Animais')

@section('sidebar')
    @parent

@endsection

@section('content')
<h2>Lista de Animais</h2>
<a href="{{route('animal.create')}}"><button class="btn btn-success">Adicionar</button></a>
<div class="table-responsive table-adjust">
  <table class="table">
    <thead>
      <tr>
        <th>Nome do Animal</th>
        <th>Raça</th>
        <th>Idade</th>
        <th>Registro</th>
        <th>Pelagem</th>
      </tr>
    </thead>
    @foreach($animals as $animal)
    <tbody>
      <tr onclick="location.href = '{{route('animal.show', $animal->id)}}'">
        <td>{{$animal->name}}</td>
        <td>{{$animal->breed}}</td>
        <td>{{$animal->age}}</td>
        <td>{{$animal->register}}</td>
        <td>{{$animal->coat}}</td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>

<script>
@endsection