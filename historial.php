<?php
session_start();
include('admin.php');
include('conexion.php');
include("data/datos.php");
include("inc/navbar-paciente.php");


$result = mysqli_query($conn,"SELECT id_paciente FROM pacienteinfo WHERE correo='".$_SESSION['correo']."' ");
$row8 = mysqli_fetch_assoc($result);

$id_paciente = $row8['id_paciente'];

$result = mysqli_query($conn,"SELECT * FROM histomed WHERE id_paciente='$id_paciente' ORDER BY fecha DESC LIMIT 5");
// echo $row9['diagnostico'];

?>


<!DOCTYPE html>
<html lang="es" style="height: 100%;">
  <head >
    <title>Nombre Del Proyecto</title>
    <!-- Required meta tags -->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  </head>
  
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top text-center perso d-xl-none d-lg-none">
    <a class="navbar-brand d-lg-none d-xl-none" href="inicio.php">
        <img src="logo3.png" width="135" height="20" alt="">
    </a>

    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard">Perfil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Citas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="historial">Historial Médico</a>
                </li>
            </ul>
            <hr>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 alinear">
            <li class="nav-item">
                <a class="nav-link" href="inicio">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout">Salir</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 mr-md-0 col-10" type="search" placeholder="Buscar">
            <button class="btn btn-outline-light my-2 my-sm-0 col-2" type="submit"><i class="fas fa-search" style="font-size: 0.8em;"></i></button>
            </form>
        </div>
    </nav>

  <body class="fondo-blanco">
    <!-- navbar -->
    
    <div class="row no-gutters exacto">
        <div class="col-lg-10 sidepanel-second">
        <!-- <a href="index.php"><p class="text-muted lead d-none d-sm-block"><i class="fas fa-angle-left ml-3" aria-hidden="true"></i> Inicio</p></a> -->
            <h5 class="pl-4 d-block d-lg-none mt-3"><Strong>Innorbitx</Strong></h5>
            <h5 class="pl-4 d-block d-lg-none">Consultorio Médico</h5>
                <div class="container bajar-texto">

                <div class="schedule-table mb-2">
                  <p class="pt-5 text-center lead d-block text-secondary">Historial médico (Últimas 5 consultas)</p>
                    <div class="ml-3 mr-3 mt-3">
                        <?php include("inc/mostrar-historial.php"); ?>
                    </div>
                </div>

                
                <div class="parallax">
                  <p class="espaciado text-white text-justify">"Gracias por formar parte de nuestra plataforma, recuerda que en caso de requerir ayuda adicional o dudas sobre como visualizar los datos de tu historial médico puedes visitar la sección de ayuda"</p>
                  <p class="espaciado text-white text-center pb-5 mb-0">&#8212; El equipo INNORTBIX</p>
                </div>
              </div>  
            </div>
        <?php include("inc/nav-side.php"); ?>
     </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

  </body>
</html>