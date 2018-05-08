@extends('template.app')

@section('title', 'Listar Palpações')

@section('sidebar')
    @parent

@endsection

@section('content')
<div class="row form-row col-md-8 col-xs-12 col-sm-12 col-lg-12 ajuste-div">
  <h2>{{$animal->name}}</h2>
  <div class="list-group" align="right">
    <a href="{{route('addPalpacao', $animal->id)}}" class="btn btn-success" role="button">Cadastrar Palpação</a>
  </div>
  <hr>
  <div>
    <label>Proprietário:</label>
    <h3>{{$animal->client->name}}</h3>
  </div>
  <div class="table-responsive table-adjust">
    <table class="table">
      <thead>
        <tr>
          <th>Data Palpação</th>
          <th>Observações</th>
          <th>Garanhão</th>
        </tr>
      </thead>
      @foreach($animalP as $anim)
      <tbody>
        <tr onclick="location.href = '{{route('listarPalpacaoId', $anim->id)}}'">
          <td>{{date('d F Y', strtotime($anim->date))}}</td>
          <td>{{$anim->annotations}}</td>
          <td>{{$anim->stallion}}</td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
  <div class="form-group">
		<a href="{{route('animal.show', $animal->id)}}"><button size="large" type="primary submit" class="btn btn-success">Voltar</button></a>
	</div>
</div>
@endsection