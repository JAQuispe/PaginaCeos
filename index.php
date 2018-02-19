<?php $page='inicio';
      require ('header.php');
?>

    <section class="container bodies">
      <br>
      <h1 class="text-center">Somos Ceos Tours</h1>
      <section class="ml-5 mr-5">
        <hr>
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top img-fluid hvr-grow" src="imagenes/portada.jpg" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">NUESTROS SERVICIOS</h4>
              <span style="line-height:1.4em;">
                <span style="font-weight:bold;"> Taxi Directo</span>
              </span>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a class="btn btn-primary" href="servicios.php" role="button">Ver más</a>
            </div>
          </div>
          <div class="card">
            <div class="card-block">
              <div>
                <h3><b>Llámanos al:</b></h3>
                <h1>42 30 20 <i class="fas fa-phone-square"></i></h1><br><br>
                <h3><b>Ubíquenos en:</b></h3>
                <h4>Calle Colón 106 A - J.L.B. y Rivero <i class="fas fa-map-marker-alt"></i></h4><br><br>
                <h3><b>Correo electrónico:</b></h3>
                <h4>ceos_tours@hotmail.com <i class="fas fa-envelope"></i></h4><br><br>
                <h3><b>Síguenos:</b></h3>
                <h1><a href="https://web.facebook.com/ceos.tours.9" target="_blank"><i class="fab fa-facebook-square"></i></a></h1>
              </div>
            </div>
          </div>
        </div>

        <div class="card mt-4">
          <h2 class="block-title text-center" style="font-weight:bold;">Tarifario</h2>
          <div class="card-block">
            <div>
              <FONT  SIZE=4 COLOR="teal">Buscamos que tengas la mejor experencia con nuestro servicio. Así que te brindamos el TARIFARIO CEOS para que puedas saber cuàl es la tarifa adecuada para nuetros servicios.</FONT>
              <div id="next_button" align="right">
                <a class="btn btn-primary " href="tarifas.php" role="button">Ver Tarifário</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <br>
    </section>

    <?php require ('footer.php'); ?>
