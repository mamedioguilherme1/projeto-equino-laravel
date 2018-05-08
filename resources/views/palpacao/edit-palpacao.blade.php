@extends('template.app')

@section('title', 'Editar Palpacao')

@section('sidebar')
    @parent

@endsection

@section('content')
	<div class="row form-row col-md-8 col-xs-12 col-sm-12 col-lg-12 ajuste-div">
		<h2>Editar Palpação</h2>
		<form method="post" action="{{route('updatePalpacao', $palpacao->id)}}" enctype="multipart/form-data">
		{{ csrf_field() }}
    {!! method_field('put') !!}
			<div class="form-group">
				<div class="form-group col-md-6">
					<label class="pull-left">Animal</label>
					<input class="form-control" value="{{$palpacao->animal->name}}" type="text" readonly>
					<input name="animal_id" value="{{$palpacao->animal->id}}" type="hidden">
				</div>
				<div class="form-group col-md-6">
					<label class="pull-left">Proprietário</label>
					<input class="form-control" value="{{$palpacao->client->name}}" type="text" readonly>
					<input name="client_id" value="{{$palpacao->client->id}}" type="hidden">
				</div>
				<div class="form-group col-md-6">
					<label class="pull-left">Data da Palpação</label>
          <label class="pull-right">Data antiga: {{date('d/m/Y', strtotime($palpacao->date))}}</label>
					<input class="form-control" value="{{date('d/m/Y', strtotime($palpacao->date))}}" name="date" type="date" placeholder="Nome do Animal">
				</div>
				<div class="form-group col-md-6">
					<label class="pull-left">Garanhão</label>
					<input class="form-control" value="{{$palpacao->stallion}}" name="stallion" type="text" placeholder="Garanhão">
				</div>   
				<div class="col-md-6">
					<div class="form-group">
						<label for="comment">Observações:</label>
						<textarea class="form-control" rows="5" id="comment" name="annotations">{{$palpacao->annotations}}</textarea>
					</div>
				</div>
				<div class="form-group col-md-12 ">
					<button size="large" type="primary submit" class="btn btn-success">Editar</button>
				</div>
			</div>
		</form>
	</div>
@endsection