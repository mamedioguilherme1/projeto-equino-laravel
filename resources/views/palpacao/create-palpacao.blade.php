@extends('template.app')

@section('title', 'Adicionar Palpacao')

@section('sidebar')
    @parent

@endsection

@section('content')
	<div class="row form-row col-md-8 col-xs-12 col-sm-12 col-lg-12 ajuste-div">
		<h2>Cadastrar Palpação</h2>
		<form method="post" action="{{route('storePalpacao')}}" enctype="multipart/form-data">
		{{ csrf_field() }}
			<div class="form-group">
				<div class="form-group col-md-6">
					<label class="pull-left">Data da Palpação</label>
					<input class="form-control" name="date" type="date" placeholder="Nome do Animal">
				</div>
				<div class="form-group col-md-6">
					<label class="pull-left">Proprietário</label>
					<input class="form-control" value="{{$animal->client->name}}" type="text" readonly>
					<input name="client_id" value="{{$animal->client->id}}" type="hidden">
				</div>
				<div class="form-group col-md-6">
					<label class="pull-left">Animal</label>
					<input class="form-control" value="{{$animal->name}}" type="text" readonly>
					<input name="animal_id" value="{{$animal->id}}" type="hidden">
				</div>
				<div class="form-group col-md-6">
					<label class="pull-left">Garanhão</label>
					<input class="form-control" name="stallion" type="text" placeholder="Garanhão">
				</div>   
				<div class="col-md-6">
					<div class="form-group">
						<label for="comment">Observações:</label>
						<textarea class="form-control" rows="5" id="comment" name="annotations"></textarea>
					</div>
				</div>
				<div class="form-group col-md-12 ">
					<button size="large" type="primary submit" class="btn btn-success">Criar</button>
				</div>
			</div>
		</form>
	</div>
@endsection