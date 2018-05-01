@extends('template.app')

@section('title', 'Editar Cliente')

@section('sidebar')
    @parent

@endsection

@section('content')
	<div class="row form-row col-md-8 col-xs-12 col-sm-12 col-lg-12 ajuste-div">
		<h2>Cadastrar Cliente</h2>
		<form method="post" action="{{route('client.update', $client->id)}}" enctype="multipart/form-data">
      {{ csrf_field() }}
      {!! method_field('put') !!}
			<div class="form-group">
				<div class="form-group col-md-6">
					<label class="pull-left">Nome</label>
					<input class="form-control" value="{{$client->name}}" name="name" type="text" placeholder="Nome Cliente">
				</div>
				<div class="form-group col-md-6">
					<label class="pull-left">E-mail</label>
					<input class="form-control" value="{{$client->email}}" name="email" type="text" placeholder="Email">
				</div>
				<div class="form-group col-md-6">
					<label class="pull-left">Telefone</label>
					<input class="form-control" value="{{$client->cellphone}}" name="cellphone" type="text" placeholder="Telefone de contato">
				</div>
				<div class="form-group col-md-6">
					<label class="pull-left">CPF</label>
					<input class="form-control" value="{{$client->cpf}}" name="cpf"  type="text" placeholder="CPF">
				</div>
				<div class="form-group col-md-12">
					<label class="pull-left">Endereço</label>
					<input class="form-control" value="{{$client->address}}" name="address" type="text" placeholder="Endereço">
				</div>
				<div class="form-group col-md-12">
					<button size="large" type="primary submit" class="btn btn-success">Editar</button>
				</div>
			</div>
		</form>
	</div>
@endsection