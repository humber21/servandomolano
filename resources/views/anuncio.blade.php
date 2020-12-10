<div class="container mb-5">
  @include('layouts/includes/navbar')
</div>


<div class="container" style="margin-top: 100px">
  @foreach ($anuncios ?? '' as $a)
  <h1>{{$a->titulo}}</h1>
  <div class="card ">
      <div class="card-body">
            <div class="container">
              <?php
                $anuncioNuevo=htmlspecialchars_decode($a->contenido);
                echo $anuncioNuevo;
             ?>
            </div>
      </div> 
      <div class="card-footer">
        <small class="text-muted">Publicacion del anuncio: {{$a->created_at}}</small>
      </div>
    </div>
  </div>
  <hr class="featurette-divider">  
@endforeach
</div>

@include('layouts/includes/footer')