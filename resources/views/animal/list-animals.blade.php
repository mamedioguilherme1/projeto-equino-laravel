@extends('template.app')

@section('title', 'Lista de Animais')

@section('sidebar')
    @parent

@endsection

@section('content')
<h2>Lista de Animais</h2>
  <div align="right">
    <a href="{{route('animal.create')}}"><button class="btn btn-success">Adicionar</button></a>
  </div><br>
  <form method="get" action="{{route('buscarAnimal')}}" enctype="multipart/form-data">
    <div class="input-group col-md-4">
      <input type="text" class="form-control" name="search" placeholder="Nome do Animal...">
      <span class="input-group-btn">
        <button class="btn btn-primary" type="button submit">Buscar</button>
      </span>
    </div>
  </form>
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