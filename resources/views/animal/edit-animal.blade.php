@extends('template.app')

@section('title', 'Editar Animal')

@section('sidebar')
    @parent

@endsection

@section('content')
	<div class="row form-row col-md-8 col-xs-12 col-sm-12 col-lg-12 ajuste-div">
		<h2>Editar Animal</h2>
		<form method="post" action="{{route('animal.update', $animal->id)}}" enctype="multipart/form-data">
      {{ csrf_field() }}
      {!! method_field('put') !!}
			<div class="form-group">
				<div class="form-group col-md-6">
					<label class="pull-left">Nome</label>
					<input class="form-control" name="name" type="text" placeholder="Nome do Animal" value="{{$animal->name}}">
				</div>
				<div class="form-group col-md-6">
					<label class="pull-left">Raça</label>
					<input class="form-control" name="breed" type="text" placeholder="Raça" value="{{$animal->breed}}">
				</div>
				<div class="form-group col-md-6">
					<label class="pull-left">Idade</label>
					<input class="form-control" name="age" type="number" placeholder="Idade" value="{{$animal->age}}">
				</div>
				<div class="form-group col-md-6">
					<label class="pull-left">Registro</label>
					<input class="form-control" name="register"  type="text" placeholder="Registro" value="{{$animal->register}}">
				</div>
				<div class="form-group col-md-6">
					<label class="pull-left">Pelagem</label>
					<input class="form-control" name="coat" type="text" placeholder="Pelagem" value="{{$animal->coat}}">
				</div>
				<div class="form-group col-md-6">
					<label for="sel1">Dono:</label>
					<select class="form-control" id="sel1" name="client_id">
						@foreach($clients as $client)
              @if($nameC->name == $client->name)
							  <option selected value="{{$client->id}}">{{$client->name}}</option>
              @else
                <option value="{{$client->id}}">{{$client->name}}</option>
              @endif
						@endforeach
					</select>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="comment">Observações:</label>
						<textarea class="form-control" rows="5" id="comment" name="annotations">{{$animal->annotations}}</textarea>
					</div>
				</div>   
				<div class="form-group col-md-12 ">
					<button size="large" type="primary submit" class="btn btn-success">Editar</button>
				</div>
			</div>
		</form>
	</div>
@endsection