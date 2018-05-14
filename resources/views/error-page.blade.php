@extends('template.app')

@section('title', 'Erro')

@section('sidebar')
    @parent
@endsection

@section('content')
<div class="jumbotron" align="center">
  <h1>Error 404!</h1>
  <p>Ops! Essa tela está indisponível</p>
  <p><a class="btn btn-warning btn-lg" href="{{route('home')}}" role="button">Me tire daqui!</a></p>
</div>
@endsection