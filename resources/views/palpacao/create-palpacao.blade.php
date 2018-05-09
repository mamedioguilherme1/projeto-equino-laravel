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
					<input class="form-control" name="date" type="date" placeholder="Nome do Animal">
				</div>
				<div class="panel-body col-md-2">
					<h4>Ovário</h4>
					<div class="radio">
					<div>
						<label><input type="radio" name="ovario" value="OD">Direito</label>
					</div>
					<div>
						<label><input type="radio" name="ovario" value="OE">Esquerdo</label>
					</div>
					</div>
				</div>
				<div class="panel-body col-md-2">
					<h4>Folículo</h4>
					<label class="pull-left">Tamanho [mm]:</label>
					<input class="form-control" name="tam_foliculo" type="number" placeholder="Tamanho Folículo">
					<label for="sel1">Característica:</label>
					<select class="form-control" id="sel1" name="carac_foliculo">
						<option value="Flutuante">Flutuante</option>
						<option value="Pintado">Pintado</option>
						<option value="Multiplos">Múltiplos</option>
					</select>
				</div>
				<div class="panel-body col-md-2">
					<h4>Corpo Luteo</h4>
					<label class="pull-left">Dias:</label>
					<input class="form-control" name="cl_dias" type="number" placeholder="Dias">
					<label for="sel1">Tipo:</label>
					<select class="form-control" id="sel1" name="cl_tipo">
						<option value="cavitario">Cavitário</option>
						<option value="hemorragico">Hemorrágico</option>
					</select>
				</div>
				<div class="panel-body col-md-2">
					<h4>Útero</h4>
					<label for="sel1">Edema:</label>
					<select class="form-control" id="sel1" name="ut_edema">
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
						<option value="liquido">Liquido</option>
						<option value="cisto">Cisto</option>
					</select>
				</div>
				<div class="panel-body col-md-2">
					<hr>
					<label for="sel1">Prenhez:</label>
					<select class="form-control" id="sel1" name="ut_prenhez">
						<option value="P+">P+</option>
						<option value="P-">P-</option>
					</select>
				</div>
				<div class="panel-body col-md-6">
					<label for="sel1">Garanhão:</label>
					<input class="form-control" name="stallion" type="text" placeholder="Garanhão">
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="comment">Procedimento:</label>
						<textarea class="form-control" rows="5" id="comment" name="procedimento" placeholder="Ex: Inseminação Artificial.."></textarea>
					</div>
				</div>  
				<div class="panel-body col-md-3">
					<h4>Injetáveis:</h4>
					<label class="pull-left">Vacina:</label>
					<select class="form-control" id="sel1" name="injetaveis">
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
					<input class="form-control" name="inj_quantidade" type="number" placeholder="Quantidade ml">
				</div>    
				<div class="form-group col-md-12 ">
					<button size="large" type="primary submit" class="btn btn-success">Criar</button>
				</div>
			</div>
		</form>
	</div>
@endsection