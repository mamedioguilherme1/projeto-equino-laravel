@extends('template.app')

@section('title', 'Editar Palpacao')

@section('sidebar')
    @parent

@endsection

@section('content')
	<div class="row form-row col-md-8 col-xs-12 col-sm-12 col-lg-12 ajuste-div">
		<h2>Editar Palpação</h2>
		<a href="{{route('listarPalpacao', $animal->id)}}"><button size="large" class="btn btn-primary">Voltar</button></a>
		<form method="post" action="{{route('updatePalpacao', $palpacao->id)}}" enctype="multipart/form-data">
		{{ csrf_field() }}
    {!! method_field('put') !!}
		<div class="form-group">
				<div class="form-group col-md-3">
					<label class="pull-left">Animal</label>
					<input class="form-control" value="{{$animal->name}}" type="text" readonly>
					<input name="animal_id" value="{{$animal->id}}" type="hidden">
				</div>
				<div class="form-group col-md-3">
					<label class="pull-left">Dono</label>
					<input class="form-control" value="{{$animal->client->name}}" type="text" readonly>
					<input name="client_id" value="{{$animal->client->id}}" type="hidden">
				</div>
				<div class="form-group col-md-6">
					<label class="pull-left">Data da Palpação:</label>
					<label class="pull-right">Data da antiga: {{date('d/m/Y', strtotime($palpacao->date))}}</label>
					<input class="form-control" name="date" type="date" placeholder="Nome do Animal">
				</div>
				<div class="panel-body col-md-2">
					<h4>Ovário</h4>
					<div class="radio">
					@if($palpacao->ovario == "OD")
						<div>
							<label><input type="radio" name="ovario" value="OD" checked>Direito</label>
						</div>
					@else
						<div>
							<label><input type="radio" name="ovario" value="OD">Direito</label>
						</div>
					@endif
					@if($palpacao->ovario == "OE")
						<div>
							<label><input type="radio" name="ovario" value="OE" checked>Esquerdo</label>
						</div>
					@else
						<div>
							<label><input type="radio" name="ovario" value="OE">Esquerdo</label>
						</div>
					@endif
					</div>
				</div>
				<div class="panel-body col-md-2">
					<h4>Folículo</h4>
					<label class="pull-left">Tamanho [mm]:</label>
					<input class="form-control" name="tam_foliculo" value="{{$palpacao->tam_foliculo}}" type="number" placeholder="Tamanho Folículo">
					<label for="sel1">Característica:</label>
					<select class="form-control" id="sel1" name="carac_foliculo">
						<option selected value="{{$palpacao->carac_foliculo}}">{{$palpacao->carac_foliculo}}</option>
						<option value="Flutuante">Flutuante</option>
						<option value="Pintado">Pintado</option>
						<option value="Multiplos">Múltiplos</option>
					</select>
				</div>
				<div class="panel-body col-md-2">
					<h4>Corpo Luteo</h4>
					<label class="pull-left">Dias:</label>
					<input class="form-control" name="cl_dias" value="{{$palpacao->cl_dias}}" type="number" placeholder="Dias">
					<label for="sel1">Tipo:</label>
					<select class="form-control" id="sel1" name="cl_tipo">
						<option selected value="{{$palpacao->cl_tipo}}">{{$palpacao->cl_tipo}}</option>
						<option value="cavitario">Cavitário</option>
						<option value="hemorragico">Hemorrágico</option>
					</select>
				</div>
				<div class="panel-body col-md-2">
					<h4>Útero</h4>
					<label for="sel1">Edema:</label>
					<select class="form-control" id="sel1" name="ut_edema">
						<option selected value="{{$palpacao->ut_edema}}">{{$palpacao->ut_edema}}</option>
						<option value="G1">G1</option>
						<option value="G2">G2</option>
						<option value="G3">G3</option>
						<option value="G4">G4</option>
						<option value="G5">G5</option>
					</select>
				</div>
				<div class="panel-body col-md-2">
					<hr>
					<label for="sel1">Liquido:</label>
					<select class="form-control" id="sel1" name="ut_liquido">
						<option selected value="{{$palpacao->ut_liquido}}">{{$palpacao->ut_liquido}}</option>
						<option value="liquido">Liquido</option>
						<option value="cisto">Cisto</option>
					</select>
				</div>
				<div class="panel-body col-md-2">
					<hr>
					<label for="sel1">Prenhez:</label>
					<select class="form-control" id="sel1" name="ut_prenhez">
						<option selected value="{{$palpacao->ut_prenhez}}">{{$palpacao->ut_prenhez}}</option>
						<option value="P+">P+</option>
						<option value="P-">P-</option>
					</select>
				</div>
				<div class="panel-body col-md-6">
					<label for="sel1">Garanhão:</label>
					<input class="form-control" name="stallion" value="{{$palpacao->stallion}}" type="text" placeholder="Garanhão">
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="comment">Procedimento:</label>
						<textarea class="form-control" rows="5" id="comment" name="procedimento" placeholder="Ex: Inseminação Artificial..">{{$palpacao->procedimento}}</textarea>
					</div>
				</div>  
				<div class="panel-body col-md-3">
					<h4>Injetáveis:</h4>
					<label class="pull-left">Vacina:</label>
					<select class="form-control" id="sel1" name="injetaveis">
							<option selected value="{{$palpacao->injetaveis}}">{{$palpacao->injetaveis}}</option>
							<option value="GnRH">GnRH</option>
							<option value="HCG">HCG</option>
							<option value="PGF2a">PGF2a</option>
							<option value="Ocitocina">Ocitocina</option>
							<option value="Dexa">Dexa</option>
							<option value="Antibiotico">Antibiotico</option>
					</select>
				</div>
				<div class="panel-body col-md-3">
					<hr>
					<label for="sel1">Quantidade ml:</label>
					<input class="form-control" name="inj_quantidade" type="number" value="{{$palpacao->inj_quantidade}}" placeholder="Quantidade ml">
				</div>    
				<div class="form-group col-md-12 ">
					<button size="large" type="primary submit" class="btn btn-success">Editar</button>
				</div>
			</div>
		</form>
	</div>
@endsection