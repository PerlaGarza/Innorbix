<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>INNORTBIX - Inicio</title>
    <!-- Required meta tags -->
    <meta charset="utd-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  </head>

  <nav class="navbar navbar-expand-lg navbar-dark fondo-barra fixed-top">
  <a class="navbar-brand" href="inicio.php">
    <img src="logo3.png" width="135" height="20" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mr-3">
      <li class="nav-item active">
        <a class="nav-link text-white" href="inicio">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="servicios">Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="sobre-nosotros">Sobre nosotros</a>
      </li>
      <li class="nav-item">
        
        <a class="nav-link text-white" href="index.php"><span class="ocultar-span" style="color: #fff; border-left: 1px solid #fff; padding-left: 1em;"></span><i class="far fa-user pr-2" style="color: #fff;"></i> Ingresar</a>
      </li>
    </ul>
  </div>
</nav>

<body>

    <div class="parallax pt-5 pb-5">
        <div class="container inicio mx-auto">
            <p class="fluido text-white display-4 text-center mover-primero">INNORBITX</p>
            <p class="fluido text-white lead text-center justify mover-segundo">Damos servicio a personas que requieren de m&eacute;dicos para un diagnostico, somos la mejor opci&oacute;n</p>
            <div class="text-center">
            <a href="sobre-nosotros" class="btn btn-outline-light boton-circular mover-segundo">Sobre nosotros</button></a>
            </div>
          </div>
    </div>

    <div id="nosotros" class="row  separacion text-justify">
        <div class="col-lg separacion-individual">
          <h5 class="mb-4 text-center">Calidad</h5>
            <div class="container-fluid text-center mb-4">
                 <i class="far fa-check-circle fa-2x"></i>
            </div>
            <p class="text-center lead">Médicos con excelente experiencia, buena atención y seguimiento del estado de salud del paciente.</p>
        </div>
        <div class="col-lg separacion-individual">
              <h5 class="mb-4 text-center">Atención</h5>
                <div class="container-fluid text-center mb-4">
                    <i class="far fa-heart fa-2x"></i>
                </div>
          <p class="lead text-center">Cuidamos de ti, para nosotros siempre seras lo más importante y queremos verte bien.</p>
        </div>
        <div class="col-lg separacion-individual">

              <h5 class="mb-4 text-center">Seguimiento</h5>
              <div class="container-fluid text-center mb-4">
                <i class="far fa-chart-bar fa-2x"></i>
            </div>
          <p class="lead text-center">Visualiza tus citas, tu historial médico y el progreso de tus cambios.</p>
        </div>
      </div>

<!-- TEXTO DE "Visitanos" 
      <div class="separacion-seccion">
        <p class="lead text-center text-white">Visítanos</p>
    </div>
-->


    <div id="map">



</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script>
      function initMap() {
        // Styles a map in night mode.
        var myLatLng = {lat: 25.726540675928412, lng: -100.31192342036133};

        var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="lead firstHeading">INNORBITX</h1>'+
            '<div id="bodyContent">'+
            '<p>Consultorio especializado en brindarte bienestar, calidad y confianza </p>' + 
            '<p>Dirección: San Nicolas 463</p>' +
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: myLatLng,
          styles: [
          {
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#f5f5f5"
              }
            ]
          },
          {
            "elementType": "labels.icon",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#616161"
              }
            ]
          },
          {
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#f5f5f5"
              }
            ]
          },
          {
            "featureType": "administrative.land_parcel",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#bdbdbd"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#eeeeee"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#e5e5e5"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#ffffff"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "geometry.fill",
            "stylers": [
              {
                "color": "#3e73fd"
              },
              {
                "lightness": 10
              },
              {
                "weight": 0.5
              }
            ]
          },
          {
            "featureType": "road.arterial",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#dadada"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#616161"
              }
            ]
          },
          {
            "featureType": "road.local",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          },
          {
            "featureType": "transit.line",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#e5e5e5"
              }
            ]
          },
          {
            "featureType": "transit.station",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#eeeeee"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#c0c0c0"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          }
        ]
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Universidad Autonoma de Nuevo León'
    });
    marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
}






    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAY_phPUqbVUHTqzM0QGzMi8dXAhA3OTjw&callback=initMap"
    async defer></script>

    
</body>


 

</html>