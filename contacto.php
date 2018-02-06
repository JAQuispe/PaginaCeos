<?php require ('header.php'); ?>

    <section class="container mb-5">
      <div class="row">
        <div class="col-md-7">
          <div id="map" class="container map mt-4"></div>
        </div>
          <div class="col-md-5">
            <div class="card card-inverse card-success mt-4">
              <section class="container mt-4 ml-4">
                <div>
                    <h3 class="hvr-buzz"><b>Llámanos al:</b></h3><br>
                    <h1 class="hvr-pulse-grow">42 30 20 <i class="fas fa-phone-square"></i></h1><br><br><br>
                    <h3 class="hvr-buzz"><b>Ubíquenos en:</b></h3>
                    <h4 class="hvr-pulse-grow">Calle Colón 106 A - J.L.B. y Rivero <i class="fas fa-map-marker-alt"></i></h4><br><br><br>
                    <h3 class="hvr-buzz"><b>Correo electrónico:</b></h3>
                    <h4 class="hvr-pulse-grow">ceos_tours@hotmail.com <i class="fas fa-envelope"></i></h4><br><br><br>
                    <h3 class="hvr-buzz"><b>Síguenos:</b></h3>
                    <h1><a href="https://web.facebook.com/ceos.tours.9" target="_blank"><i class="fab fa-facebook-square hvr-pulse-grow"></i></a></h1>
                </div>
              </section>
            </div>
          </div>
      </div>
    </section>

    <script>
    function myMap() {
      var mapOptions = {
          center: new google.maps.LatLng(-16.431325, -71.51180720000002),
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(document.getElementById("map"), mapOptions);
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(-16.431325, -71.51180720000002),
          map: map,
          title: 'Ceos Tours S.R.L.'
      })
    }
    </script>

    <?php require ('footer.php'); ?>
