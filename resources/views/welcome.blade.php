  @include('layouts/includes/navbar')
<main role="main">


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="image/carrusel/agricultura.jpg" style="height:1000px;max-height: 655px;width: 100%" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Agricultura</h1>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer mas</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="image/carrusel/informatica.jpg" style="height:1000px;max-height: 655px;width: 100%" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Informatica</h1>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer mas</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="image/carrusel/cia.jpg" style="height:1000px;max-height: 655px;width: 100%;" alt="Third slide">
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>Conservacion e industrializacion de alimentos </h1>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer mas</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</main>
      <!-- START THE FEATURETTES -->
    <div class="container" style="margin-bottom: 30px; ">
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Mision</h2>
          <p class="lead">Lograr que los adolescentes de nuestro plantel adquieran
            conocimientos, valores,habilidades, capacidades y destrezas que le permitan resolver
            problemas que se les presente en su vida cotidiana todo esto gracias a la educación integral.

            Contando con un personal capacitado y que trabaje colegialmente para que proporcione una educación
            de calidad junto con padres de familia comprometiéndose apoyar el proceso enseñanza-aprendizaje
            basado en la democracia y el liderazgo compartido y aprovechar adecuadamente la infraestructura y funcionamiento
            de la institución ademas vincular la escuela con la comunidad donde está inmersa.
          </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="image/extras/mision.jpg" alt="Generic placeholder image" style="border-radius:25%">
        </div>
      </div>

      <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Vision</h2>
            <p class="lead">La comunidad de la escuela Servando Canales Molano se compromete a brindar a los adolescentes
              una educación integral y capacitarse permanentemente promoviendo la participación y colaboración del equipo docente,
              administrativo, de apoyo, padres de familia y alumnos procurando un ambiente de trabajo confortable en el marco de la
              tolerancia, respeto y democracia que se proyecta hacia la comunidad a la cual sirve la escuela.
            </p>
          </div>
          <div class="col-md-5 order-md-2">
            <img class="featurette-image img-fluid mx-auto" src="image/extras/vision.jpg" alt="Generic placeholder image" style="border-radius:25%">
          </div>
        </div>
    </div>
@include('layouts/includes/footer')
