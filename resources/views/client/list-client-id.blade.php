@extends('template.app')

@section('title', 'Adicionar Cliente')

@section('sidebar')
    @parent

@endsection

@section('content')
<div class="row form-row col-md-8 col-xs-12 col-sm-12 col-lg-12 ajuste-div">
  <h2>{{$client->name}}</h2>
  <div class="list-group">
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">Endereço</h4>
      <p class="list-group-item-text">{{$client->address}}</p>
    </a>
  </div>
  <div class="list-group">
    <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">Telefone</h4>
    <p class="list-group-item-text">{{$client->cellphone}}</p>
    </a>
  </div>
  <div class="list-group">
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">CPF</h4>
      <p class="list-group-item-text">{{$client->cpf}}</p>
    </a>
  </div>
  <div class="list-group">
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">Email</h4>
      <p class="list-group-item-text">{{$client->email}}</p>
    </a>
  </div>
  <form style="display: inline-block;" method="POST" action="{{route('client.destroy', $client->id)}}"                                                        
      data-toggle="tooltip" data-placement="top"
      title="Excluir" 
      onsubmit="return confirm('Confirma exclusão?')">
      {{method_field('DELETE')}}{{ csrf_field() }} 
      <a href="{{route('client.edit',$client->id)}}" class="btn btn-warning" role="button">Editar</a>                                              
      <button type="submit" class="btn btn-danger">Excluir</button>
      </form>
</div>

@endsection