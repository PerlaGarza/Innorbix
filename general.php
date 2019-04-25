<?php 
session_start();
include("conexion.php");
include("fecha.php");
include("data/datos-doctor.php");
include("inc/navbar-doctor.php");

function blah()
{
    global $conn;
    $sql = "SELECT COUNT(*) FROM pacienteinfo";
    if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
    return $rowcount;
}

function bla()
{
    global $conn;
    $sql = "SELECT COUNT(*) FROM doctorinfo";
    if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
    return $rowcount;
}

?>

<!DOCTYPE html>
<html lang="en" style="height: 100%;">
  <head >
    <title>Perfil - Innorbitx</title>
    <!-- Required meta tags -->
    <meta charset="utd-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  </head>
  


<!-- Barra superior para la busqueda etc 

<nav class="navbar navbar-expand-lg navbar-dark fixed-top text-center perso">
  <a class="navbar-brand d-lg-none d-xl-none" href="#">
    <img src="logo3.png" width="135" height="20" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 estilo">

      <li class="nav-item mr-5 pr-5 alineacion">
        <a href="index.php"><p class="text-white lead"><i class="fas fa-angle-left ml-3" aria-hidden="true"></i> Inicio</p></a>
      </li> 

    -->
      
      <!--
      <li class="nav-item">
        <a class="nav-link ml-5 pr-5" href="#">INICIO<span class="sr-only">(current)</span></a>
      </li> -->


      <!--
      <li class="nav-item">
        <a class="nav-link ml-5 pl-5 pr-5" href="#">SERVICIO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-5" href="#">CONTACTO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-5" href="#">AYUDA </a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 mr-md-0 col-10" type="search" placeholder="Buscar">
      <button class="btn btn-outline-light my-2 my-sm-0 col-2" type="submit"><i class="fas fa-search" style="font-size: 0.8em;"></i></button>
    </form>
  </div>
</nav> 

-->




  <body class="fondo-blanco">
    <!-- navbar -->
    
      <div class="row no-gutters exacto">
        <div class="col-lg-10 sidepanel-second">
          <!-- <a href="index.php"><p class="text-muted lead d-none d-sm-block"><i class="fas fa-angle-left ml-3" aria-hidden="true"></i> Inicio</p></a> -->
          <h5 class="pl-4 d-block d-lg-none mt-3"><Strong>Innorbitx</Strong></h5>
            <h5 class="pl-4 d-block d-lg-none">Consultorio Médico</h5>
            <div class="container bajar-texto">



              <div class="ml-3 mr-3 card d-block movimiento-arriba espacio-superior">
                <div class="card-body">
                  <h5 class="card-title text-center">Datos sobre el consultorio</h5>
                  <hr>
                    <div class="personal-information">
                      <ul class="list-inline text-center">
                        <li class="list-inline-item"><i class="far fa-user mr-2 " aria-hidden="true"></i><?php echo blah() . " pacientes registrados"; ?> </li>
                        <li class="list-inline-item"><i class="fas fa-user-md mr-2" aria-hidden="true"></i><?php echo bla() . " doctores"; ?> </li>
                        <li class="list-inline-item"><i class="far fa-hospital mr-2" aria-hidden="true"></i><?php echo bla() . " citas atendidas"; ?> 
                        <li class="mt-5"><i class="fas fa-heartbeat mr-2 fa-4x" aria-hidden="true"></i></li>
                    </ul>
                    
                  <div class="schedule-table mb-2">
                    <p class="px-3 mt-5 lead text-center">Pacientes que se registraron esta semana: </p>
                      <ul class="list-group list-group-flush justify">
                        <hr>
                        <?php while($row = $result->fetch_array()){ 
                              echo '<li class="list-group-item ">' . $row["nombre"] . " " . $row["apellido"] . '<p style="text-align: right; color: #0F6FFF;"><Strong>&#8212; ' . $row["registro"] .'</Strong></p></a>';              
                        } ?>
                      </ul>

                </div>
                    </div>
                  </div>
                </div>




                <div class="parallax mt-5">
                  <p class="espaciado text-white text-justify">"El médico competente, antes de dar una medicina a su paciente, se familiariza no sólo con la enfermedad que desea curar, sino también con los hábitos y la constitución del enfermo."</p>
                  <p class="espaciado text-white text-center pb-5">&#8212; Marco Tulio Cicerón</p>
                </div>
              </div>
            
          <!--
          <div class="mb-1 mt-3 px-4 datos">
            <p><?php echo $nombre; ?></p>
            <p class="font-weight-bold datos-second"><?php echo $id; ?></p>
            <p class="datos-second"><?php echo $registro; ?></p>
          </div>  -->
          
        </div>

        <!--
        <div class="col-md-12 d-none d-md-block pt-5 text-white adios-second container-fluid">   
          <h1>INNORBITX</h1>          
            <p class="lead">Consultorio médico</p>
            <div class="seccion">
              <p class="lead mt-1">Usuario: </p>  
            </div>
            -->
          
        <?php include("inc/nav-side-doctor.php"); ?>
     </div>


     







      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     


  </body>