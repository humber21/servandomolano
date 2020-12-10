<div class="container mb-5">
  @include('layouts/includes/navbar')
</div>
<br>
<div class="container">
  <div class="card">
    <div class="card-body">
      <h1 class="card-title">Agricultura</h1>
      <p class="card-text">La agricultura es el conjunto de actividades económicas y técnicas relacionadas con el tratamiento del suelo y el cultivo de la tierra para la producción de alimentos. Comprende todo un conjunto de acciones humanas que transforma el medio ambiente natural.</p>
    </div>
    <img src="{{asset('image/PaginaAgricultura/agricultura.jpg')}}" class="card-img-bottom" alt="...">
  </div>
</div>
<div class="section bg-dark pt-3 mt-3 pb-3">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Cómo nació la agricultura en el mundo</h5>
            <p class="card-text">El inicio de la agricultura se encuentra en el período Neolítico, cuando la economía de las sociedades humanas evolucionó desde la recolección, la caza y la pesca a la agricultura y la ganadería. Las primeras plantas cultivadas fueron el trigo y la cebada</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"> cifras para entender la realidad actual del campo mexicano</h5>
            <p class="card-text">1-22 millones de hectáreas, aproximadamente, se destinan a la agricultura en México.<br>
            2-23.6 millones de toneladas de maíz, en promedio, se producen cada año en nuestro país<br>
            3-17.2 millones de toneladas de maíz importó México en 2018, un incremento de 136% en nueve años.</p>
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
    <img src="/image/PaginaAgricultura/tortillas.jpg" class="card-img" alt="...">
  </div>
  <div class="col-md-8 mt-3">
    <div class="card-body">
      <h5 class="card-title">Importancia de la agricultura en mexico</h5>
      <p class="card-text">
        La agricultura en México es considerada como una de las actividades económicas con mayor relevancia ya que genera gran cantidad de empleos en el país; es considerada como el sector productivo más importante desde un punto vista económico, social y ambiental, ya que de ésta depende la alimentación primaria de millones de personas, el incremento de la población productiva y la preservación y cuidado del entorno.
      </p>
      {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
    </div>
  </div>
</div>
</div>
</div>
@include('layouts/includes/footer')
