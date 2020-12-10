@extends('adminlte::page')

@section('title', 'Dashboard')



@section('content_header')
    <h1>Anuncios</h1>
@stop

@section('content')

<div class="container" style="margin:0px 0px 10px 0px">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
    Agregar Anuncio
</button>
</div>
@if ( session('mensaje') )
    <div class="alert alert-success">{{ session('mensaje') }}</div>
@endif
  <!-- Modal -->  
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Anuncio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{Route('PublicarAnuncio')}}">
        @csrf
          <div class="form-group">
            <label for="titulo" class="col-form-label">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
          </div>
          <div class="form-group">
            <label for="contenido-anuncio" class="col-form-label">Contenido</label>
            <textarea class="form-control ckeditor" id="contenido-anuncio" name="contenido"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Agregar nuevo anuncio</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  @foreach ($anuncios as $anuncio)
  <div class="card  ">
      <div class="card-body">
        <h5 class="card-title"><h2>{{$anuncio->titulo}}</h2>
          <div class="container">
              <?php
                $anuncioNuevo=htmlspecialchars_decode($anuncio->contenido);
                echo $anuncioNuevo;
              ?>
        </div>
        <a href="{{route('MostrarAnuncio',$anuncio->id)}}" class="btn btn-warning" style="margin-left:0%">Leer mas/editar</a> </h5>
      </div> 
      <div class="card-footer">
      <small class="text-muted">Publicacion del anuncio: {{$anuncio->created_at}}</small>
      </div>
  </div>
  <hr class="featurette-divider">  
@endforeach
</div>
{{ $anuncios->links('vendor/pagination/bootstrap-4')}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">   
@stop


@section('js')
    <script> console.log('Hi!'); </script>
    <script src="{{ asset('/vendor/ckeditor/ckeditor.js') }}"></script>
@stop

