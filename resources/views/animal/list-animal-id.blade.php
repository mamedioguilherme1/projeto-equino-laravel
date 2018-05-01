@extends('template.app')

@section('title', 'Adicionar Cliente')

@section('sidebar')
    @parent

@endsection

@section('content')
<div class="row form-row col-md-8 col-xs-12 col-sm-12 col-lg-12 ajuste-div">
  <h2>{{$animal->name}}</h2>
  <div class="list-group">
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">Dono do Animal</h4>
      <p class="list-group-item-text">{{$client->name}}</p>
    </a>
  </div>
  <div class="list-group">
    <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">Raça</h4>
    <p class="list-group-item-text">{{$animal->breed}}</p>
    </a>
  </div>
  <div class="list-group">
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">Registro</h4>
      <p class="list-group-item-text">{{$animal->register}}</p>
    </a>
  </div>
  <div class="list-group">
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">Pelagem</h4>
      <p class="list-group-item-text">{{$animal->coat}}</p>
    </a>
  </div>
  <div class="list-group">
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">Observações</h4>
      <p class="list-group-item-text">{{$animal->annotations}}</p>
    </a>
  </div>
  <form style="display: inline-block;" method="POST" action="{{route('animal.destroy', $animal->id)}}"                                                        
      data-toggle="tooltip" data-placement="top"
      title="Excluir" 
      onsubmit="return confirm('Confirma exclusão?')">
      {{method_field('DELETE')}}{{ csrf_field() }} 
      <a href="{{route('animal.edit',$animal->id)}}" class="btn btn-warning" role="button">Editar</a>                                              
      <button type="submit" class="btn btn-danger">Excluir</button>
  </form>
</div>
@endsection