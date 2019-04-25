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

    <div class="parallax pt-5 pb-3">
        <div class="container inicio">
            <p class="fluido text-white display-4 text-center">INNORBITX</p>
            <p class="fluido text-white lead text-justify descripcion-empresa">Empresa mexicana fundada en 2015 en Nuevo León, México, compañia de ciclo completo especializada en desarrorlar soluciones innovadoras en sistemas del área de la salud, siempre orientadas a proporcionar el mayor nivel de Calidad y Atención.</p>
            <p class="fluido text-white lead text-justify descripcion-empresa">Cuenta con una oficina central y un servicio de asistencia técnica en San Nicolas de los Garza, En nuestra apuesta por la calidad en todos los ambitos contamos con los mas altos estandares de calidad y con médicos expertos en su área que te garantizan una buena atención y cuidados a la medida.</p>
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
</body>

</html>