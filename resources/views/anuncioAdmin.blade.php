@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugin.Sweetalert2')

@section('content_header')
@foreach ($anuncios as $anuncio)
    <h1>{{$anuncio->titulo}}</h1>
@stop

@section('content')
<form action="{{route('EditarAnuncio',$anuncio->id)}}" method="post">
  @csrf
  <div class="form-group">
    <label for="titulo" class="col-form-label">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="{{$anuncio->titulo}}" value="{{$anuncio->titulo}}">
  </div>
  <div class="form-group">
    <label for="contenido-anuncio" class="col-form-label">Contenido</label>
    <textarea class="form-control ckeditor" id="contenido-anuncio" name="contenido">
      <?php
                $anuncioNuevo=htmlspecialchars_decode($anuncio->contenido);
                echo $anuncioNuevo;
              ?>
    </textarea>
  </div>
  <button type="submit" class="btn btn-primary" >Guardar Cambios</button>
</form>
<a class="btn btn-danger mt-2" href="{{route('EliminarAnuncio',$anuncio->id)}}">Eliminar Anuncio</a>
@endforeach
@stop
  
@section('js')
    <script> console.log('Hi!'); </script>
    <script src="{{ asset('/vendor/ckeditor/ckeditor.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@stop