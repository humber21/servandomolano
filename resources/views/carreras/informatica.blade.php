<div class="container mb-5">
    @include('layouts/includes/navbar')
  </div>
  <br>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h1 class="card-title">Informatica</h1>
        <p class="card-text">La informática, también llamada computación, es la rama de la ciencia que se encarga de estudiar la administración de métodos, técnicas y procesos con el fin de almacenar, procesar y transmitir información y datos en formato digital.</p>
      </div>
      <img src="{{asset('image/PaginaInformatica/teclado.jpg')}}" class="card-img-bottom" alt="teclado-informatica">
    </div>
  </div>
  <div class="section bg-dark pt-3 mt-3 pb-3">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Origen de la informatica</h5>
              <p class="card-text">La informática surgió en la antigüedad con la creación de diversos métodos destinados para la realización de cálculos matemáticos. Luego, de manera continua el ser humano se ha dedicado que crear nuevos métodos para automatizar los procesos de trabajo, mejorar la productividad y calidad del mismo.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Areas de la informatica</h5>
              <p class="card-text"> la informática posee dos importantes áreas de desarrollo que son el software (programas informáticos) y el hardware (parte física del sistema informático).</p>
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
      <img src="{{asset('image/PaginaInformatica/programar.jpg')}}" class="card-img" alt="mujer programando">
    </div>
    <div class="col-md-8 mt-3">
      <div class="card-body">
        <h5 class="card-title">La importancia de la informatica</h5>
        <p class="card-text">
            La informática es de gran importancia a la comunidad ya que: Existe un sin numero de programas ya creados para facilitar el trabajo en cualquier área, esto da como resultado un cambio drástico en la forma de utilizar las computadoras.
        </p>
        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
      </div>
    </div>
  </div>
  </div>
  </div>
  @include('layouts/includes/footer')
  