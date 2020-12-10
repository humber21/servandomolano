<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Escuela</title>
  <link rel="icon" href="{{asset('image/logo.png')}}">

</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-dark navbar-expand">

     <a class="navbar-brand" href="#">
      <img src="{{ asset('image/logo.png') }}" width="30" height="30" alt="" loading="lazy">
        {{-- EST No "Servando Canales Molano --}}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="{{route('paginaWelcome')}}">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('paginaAnuncios')}}">Anuncios</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Carreras
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('paginaAgricultura')}}">Agricultura</a>
            <a class="dropdown-item" href="{{route('paginaInformatica')}}">Informatica</a>
            <a class="dropdown-item" href="{{route('paginaConservacion')}}">conservacion e industrializacion de alimentos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('calendario')}}">Calendario</a>
          </li>
      </ul>
    </div>
  </nav>
