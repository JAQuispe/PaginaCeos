<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ceos</title>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.lettering.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/jquery.textillate.js"></script>
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Pontano+Sans|Lobster|Josefin+Sans|Acme|Patua+One|Kaushan+Script" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="shortcut icon" href="imagenes/icono.png">
  </head>
  <body>
    <section class="container-fluid <?php if($page=='inicio') {echo 'slider';} else {echo 'sliderB';}?> d-flex justify-content-center align-items-center">
      <h1 id="letras" class="tlt pinto2" style="display:<?php if($page=='inicio') {echo 'block';} else {echo 'none';}?>">
        <ul class="texts">
          <li data-in-effect="flash" data-in-shuffle="true" data-out-effect="fadeIn" data-out-reverse="true">Excelencia</li>
          <li data-in-effect="flash" data-in-shuffle="true" data-out-effect="fadeIn" data-out-reverse="true">Honradez</li>
          <li data-in-effect="flash" data-in-shuffle="true" data-out-effect="fadeIn" data-out-reverse="true">Pasión</li>
          <li data-in-effect="flash" data-in-shuffle="true" data-out-effect="fadeIn" data-out-reverse="true">Responsabilidad</li>
          <li data-in-effect="flash" data-in-shuffle="true" data-out-effect="fadeIn" data-out-reverse="true">Seguridad</li>
        </ul>
      </h1>
      <script type="text/javascript">
        $('.tlt').textillate({loop: true});
      </script>
    </section>

    <nav class="navbar navbar-toggleable-sm navbar-inverse fixed-top" id="menu">
      <button class="navbar-toggler navbar-toggler-right mt-2" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div>
        <a class="navbar-brand hvr-grow" href="index">
          <img src="imagenes/logo.png" width="141" height="51">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav text-center ml-auto">
          <a class="nav-item nav-link hvr-grow <?php if($page=='inicio') {echo 'active';}?>" href="index">Inicio <i class="fas fa-home"></i>&emsp;</a>
          <a class="nav-item nav-link hvr-grow <?php if($page=='nosotros') {echo 'active';}?>" href="nosotros">Nosotros <i class="fas fa-users"></i>&emsp;</a>
          <a class="nav-item nav-link hvr-grow <?php if($page=='servicios') {echo 'active';}?>" href="servicios">Servicios <i class="fas fa-car"></i>&emsp;</a>
          <a class="nav-item nav-link hvr-grow <?php if($page=='tarifas') {echo 'active';}?>" href="tarifas">Tarifas <i class="fas fa-list-alt"></i>&emsp;</a>
          <a class="nav-item nav-link hvr-grow <?php if($page=='afiliacion') {echo 'active';}?>" href="afiliacion">Afiliación <i class="fas fa-handshake"></i>&emsp;</a>
          <a class="nav-item nav-link hvr-grow <?php if($page=='contacto') {echo 'active';}?> " href="contacto">Contacto <i class="fas fa-map-marker-alt"></i>&emsp;</a>
        </div>
      </div>
    </nav>

    <!--Slider-->
    <script>
      $(window).scroll(function() {
        if ($("#menu").offset().top > 200) {
            $("#menu").addClass("opaque-navbar");
        } else {
            $("#menu").removeClass("opaque-navbar");
        }
      });
    </script>
