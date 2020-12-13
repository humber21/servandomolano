<div class="container">
  @include('layouts/includes/navbar')
</div>

<div class="container" style="margin-bottom: 81px">


  <div class="container" style="margin-top: 100px">
    <h1>Anuncios</h1>
    @foreach ($anuncios as $anuncio)
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$anuncio->titulo}}
          <a href="{{route('MostrarAnuncio',$anuncio->id)}}" class="btn btn-primary" style="margin-left:2%">Leer mas</a> </h5>
        </div> 
        <div class="card-footer">
        <small class="text-muted">Publicacion del anuncio: {{$anuncio->created_at}}</small>
        </div>
    </div>
    <hr class="featurette-divider">  
  @endforeach
  </div>
  <div class="container">
    {{ $anuncios->links('vendor/pagination/bootstrap-4')}}
  </div>
</div>
@include('layouts/includes/footer')