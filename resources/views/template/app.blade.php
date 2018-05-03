<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ciclar - @yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">
  <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>" type="text/css">
  <link rel="stylesheet" href="<?php echo asset('css/bootstrap-theme.min.css')?>" type="text/css">
  <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
  <script type="text/javascript" src="<?php echo asset('js/jquery.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo asset('js/bootstrap.min.js')?>"></script>
  <script src="main.js"></script>
</head>
<body>
  @section('sidebar')
  <div class="panel panel-default" align="center">
    <img src="{{URL::asset('../img/logo.png')}}" class="img-responsive img-adjust">
  </div>
  <nav class="navbar navbar-default menu-adjust">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Ciclar</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clientes<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{route('client.create')}}">Adicionar Cliente</a></li>
              <li><a href="{{route('client.index')}}">Listar Clientes</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Animais<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{route('animal.create')}}">Adicionar Animal</a></li>
              <li><a href="{{route('animal.index')}}">Listar Animais</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Palpações<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="">Adicionar Palpacao</a></li>
              <li><a href="{{route('listaPalpacao')}}">Listar Palpações</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  @show
  <div class="container">
      @yield('content')
  </div>
</body>
</html>