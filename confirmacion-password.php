<?php session_start(); 

// $password = $_POST["password"];
// $passwordRepetir = $_POST["password-repetir"];

// echo $password . '<br>';
// echo $passwordRepetir;


?>

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



<body style="height: 100%">

    <div class="fondo pt-5 pb-5 text-center" style="height: 100%; overflow: auto;">
        <div class="container espacio-confirmacion mt-0">
            <div class="container espacio-confirmacion bg-white confirmacion-mensaje aparecer-icono">
            <p class="borde-superior text-left">Listo hemos terminado!</p>
            <i class="fas fa-key fa-5x aparecer-icono" style="color: #0F6FFF;"></i>
                <p class="fluido text-dark confirmacion text-center mover-primero pb-0">Se ha cambiado tu contraseña</p>
                <p class="fluido text-dark lead text-justify text-center aparecer-icono-lento">Tu nueva contraseña esta lista para usarse</p>
              	<a href="login"><button type="submit" class="btn btn-outline-primary text-center">Iniciar sesión</button></a>
                </div>
           
            </div>
        </div>
    </div>

</body>
</html>