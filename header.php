<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ceos</title>
    <script src="js/jquery-3.3.1.min.js"></script>
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">
<<<<<<< HEAD
    <link rel="stylesheet" href="css/bootstrap.min.css">
=======
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
>>>>>>> 8133425d8263bec19e16b5a6f75511ccf64e5cc8
    <link rel="stylesheet" href="css/mystyle.css">
  </head>
  <body>
    <section class="container-fluid slider d-flex justify-content-center align-items-center"></section>
      <nav class="navbar navbar-toggleable-sm navbar-inverse sticky-top" id="menu" >
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div>
          <a class="navbar-brand hvr-grow-rotate" href="index.php">
            Ceos Tours
          </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav text-center ml-auto">
            <a class="nav-item nav-link hvr-wobble-top <?php if($page=='inicio') {echo 'active';}?>" href="index.php">Inicio <i class="fas fa-home"></i>&emsp;</a>
            <a class="nav-item nav-link hvr-wobble-top <?php if($page=='nosotros') {echo 'active';}?>" href="nosotros.php">Nosotros <i class="fas fa-users"></i>&emsp;</a>
            <a class="nav-item nav-link hvr-wobble-top <?php if($page=='servicios') {echo 'active';}?>" href="servicios.php">Servicios <i class="fas fa-car"></i>&emsp;</a>
            <a class="nav-item nav-link hvr-wobble-top <?php if($page=='tarifas') {echo 'active';}?>" href="tarifas.php">Tarifas <i class="fas fa-list-alt"></i>&emsp;</a>
            <a class="nav-item nav-link hvr-wobble-top <?php if($page=='afiliacion') {echo 'active';}?>" href="afiliacion.php">Afiliación <i class="fas fa-handshake"></i>&emsp;</a>
            <a class="nav-item nav-link hvr-wobble-top <?php if($page=='contacto') {echo 'active';}?> " href="contacto.php">Contacto <i class="fas fa-map-marker-alt"></i>&emsp;</a>
          </div>
        </div>
      </nav>

      <script>
        $(window).scroll(function() {
          if ($("#menu").offset().top > 400) {
              $("#menu").addClass("bg-inverse");
          } else {
              $("#menu").removeClass("bg-inverse");
          }
        });
      </script>
