<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" style="overflow: hidden">
  <head>
    <title>INNORTBIX - Inicio</title>
    <!-- Required meta tags -->
    <meta charset="utd-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
  </head>

  <nav class="navbar navbar-expand-lg navbar-dark fondo-barra fixed-top">
  <a class="navbar-brand" href="inicio.php">
    <img src="logo3.png" width="135" height="20" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="index.php">Ingresar</a>
      </li>
    </ul>
  </div>
</nav>

<body style="height: 100%">

    <div class="fondo pt-5 pb-5 text-center" style="height: 100%; overflow: auto;">
        <div class="container espacio-confirmacion mt-0">
            <div class="container espacio-confirmacion bg-white confirmacion-mensaje aparecer-icono">
            <p class="borde-superior text-left">Recuperaremos tu contraseña!</p>
            <i class="far fa-envelope fa-5x aparecer-icono" style="color: #0F6FFF;"></i>
                <p class="fluido text-dark confirmacion text-center mover-primero pb-0">Recuperar contraseña</p>
                <p class="fluido text-dark lead text-justify text-center aparecer-icono-lento">Ingresa tu dirección de correo electrónico.</p>
                    <form action="confirmacion.php" method="post" class="form ">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo electrónico" required>
                        </div>
                        <button type="submit" class="btn btn-outline-primary text-center">Continuar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    function goBack() {
        window.history.back();
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>



</body>
</html>