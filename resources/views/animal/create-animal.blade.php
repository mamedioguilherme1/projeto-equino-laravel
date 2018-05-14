@extends('template.app')

@section('title', 'Adicionar Cliente')

@section('sidebar')
    @parent

@endsection

@section('content')
	<div class="row form-row col-md-8 col-xs-12 col-sm-12 col-lg-12 ajuste-div">
		<h2>Cadastrar Animal</h2>
		<form method="post" action="{{route('animal.store')}}" enctype="multipart/form-data">
		{{ csrf_field() }}
			<div class="form-group">
				<div class="form-group col-md-6">
					<label class="pull-left">Nome</label>
					<input class="form-control" name="name" type="text" placeholder="Nome do Animal">
				</div>
				<div class="form-group col-md-6">
					<label class="pull-left">Raça</label>
					<input class="form-control" name="breed" type="text" placeholder="Raça">
				</div>
				<div class="form-group col-md-6">
					<label class="pull-left">Idade</label>
					<input class="form-control" name="age" type="number" placeholder="Idade">
				</div>
				<div class="form-group col-md-6">
					<label class="pull-left">Registro</label>
					<input class="form-control" name="register"  type="text" placeholder="Registro">
				</div>
				<div class="form-group col-md-6">
					<label class="pull-left">Pelagem</label>
					<input class="form-control" name="coat" type="text" placeholder="Pelagem">
				</div>
				<div class="form-group col-md-6">
					<label for="sel1">Dono:</label>
					<select class="form-control" id="sel1" name="client_id">
						@foreach($clients as $client)
							<option value="{{$client->id}}">{{$client->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="comment">Observações:</label>
						<textarea class="form-control" rows="5" id="comment" name="annotations"></textarea>
					</div>
				</div>
				<input name="user_id" type="text" value="{{$user}}" readonly>
				<div class="form-group col-md-12 ">
					<button size="large" type="primary submit" class="btn btn-success">Criar</button>
				</div>
			</div>
		</form>
	</div>
@endsection