<div class="container mb-5">
    @include('layouts/includes/navbar')
  </div>
  <br>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h1 class="card-title">Conservacion e industrializacion de alimentos</h1>
        <p class="card-text">La Conservación de alimentos es un conjunto de procedimientos y recursos para preparar y envasar los productos alimenticios con el fin de guardarlos y consumirlos mucho tiempo después.</p>
      </div>
      <img src="{{asset('image/PaginaConservacion/conservacion.jpg')}}" class="card-img-bottom" alt="conservacion">
    </div>
  </div>
  <div class="section bg-dark pt-3 mt-3 pb-3">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Clasificación de los métodos de conservación</h5>
              <p class="card-text">
                <strong>Biosis</strong> En este principio se fundamentan los métodos de almacenamiento a baja temperatura (alrededor de O °C). Las frutas y vegetales se almacenan por biosis porque mantienen su resistencia natural a las enfermedades y la descomposición.<br>
                
                <strong>Mediante</strong> esta se crean condiciones para llevar a los microorganismos que actúan sobre los productos conservados a un estado pasivo. En estas condiciones los microorganismos no pueden descomponer los alimentos. Esto se logra mediante: bajas temperaturas, termoanabiosis, desecación, xeroanabiosis, cambios de presión osmótica, osmoanabiosos y utilización de anestésicos o narcoanabiosis.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">¿Qué es la industria alimentaria?</h5>
              <p class="card-text">La industria alimentaria es el sector productivo que se encarga de todos los procesos propios de la cadena alimentaria de la sociedad.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section mt-3">
    <div class="container">
      <div class="card mb-3" style="max-width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{asset('image/PaginaConservacion/congelacion.jpg')}}" class="card-img" alt="mujer programando">
    </div>
    <div class="col-md-8 mt-3">
      <div class="card-body">
        <h5 class="card-title">Ejemplo de conservacion (Congelacion)</h5>
        <p class="card-text">
          La congelación también es uno de los procesos más utilizados, tanto comercialmente como a nivel nacional, para conservar una gran variedad de alimentos, incluidos los alimentos preparados que no habrían requerido la congelación en su estado no preparado.
        </p>
        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
      </div>
    </div>
  </div>
  </div>
  </div>
  @include('layouts/includes/footer')
  