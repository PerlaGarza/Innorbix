<?php 
session_start();
include("conexion.php");
include("fecha.php");
include("data/datos-doctor.php");
include("inc/navbar-doctor.php");

$pageTitle = "Full Catalog";
$section = null;
$items_per_page = 8;

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

?>


<!DOCTYPE html>
<html lang="en" style="height: 100%;">
  <head >
    <title>Nombre Del Proyecto</title>
    <!-- Required meta tags -->
    <meta charset="utd-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="https://static.fontawesome.com/css/fontawesome-app.css">

  <body class="fondo-blanco">
    <!-- navbar -->
    
      <div class="row no-gutters exacto">
        <div class="col-lg-10 sidepanel-second">
          <!-- <a href="index.php"><p class="text-muted lead d-none d-sm-block"><i class="fas fa-angle-left ml-3" aria-hidden="true"></i> Inicio</p></a> -->
          <h5 class="pl-4 d-block d-lg-none mt-3"><Strong>Innorbitx</Strong></h5>
            <h5 class="pl-4 d-block d-lg-none">Consultorio Médico</h5>
            <div class="container bajar-texto">

<?php 

if (isset($_POST['busqueda'])) {
  $busqueda = $_POST['busqueda'];
  $result = mysqli_query($conn,"SELECT id_paciente, nombre, apellido FROM pacienteinfo WHERE id_paciente LIKE '%$busqueda%' OR nombre LIKE '%$busqueda%'");
  $row = mysqli_fetch_assoc($result);
}


if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $result = mysqli_query($conn,"SELECT * FROM pacienteinfo WHERE id_paciente='$id'");
  $resultDatosGenerales = mysqli_query($conn,"SELECT COUNT(*) FROM histomed WHERE id_paciente='$id'");

  //   while($row = $result->fetch_array()){   
  //   echo  '<div class="card mb-3">'
  //   . '<div class="card-header">'
  //   . $row["nombre"]
  //   . " "
  //   . $row["apellido"]
  //   . '</br>'
  //   . '<small>'
  //   . $row["id_paciente"]
  //   . '</small>'
  //   . '</div>'
  //   . '<div class="card-body">'
  //   . '<h5 class="card-title">Tienes un total de consultas: </h5>'
  //   . '<p class="card-text">De las cuales has seguido el tratamiento: </p>'
  //   . '</div>'
  //   . '</div>';
  // } 

  while($row = $result->fetch_array()){   
    $nombre = $row["nombre"];
    $apellido = $row["apellido"];
    $id_paciente = $row["id_paciente"];
  } 

  while($row2 = $resultDatosGenerales->fetch_array()){   
    $cumplido = $row2;
    $cantidadConsultas = implode(" ",$cumplido);
    $totalConsultas = explode(" ", $cantidadConsultas);
    $mostrarTotalConsultas = $totalConsultas[0];
  } 


  
  
    echo  '<div class="card mb-3">'
    . '<div class="card-header">'
    . '<p class="lead">'
    . $nombre
    . " "
    . $apellido
    . '</p>'
    . '<small>'
    . '<h5>'
    . $id_paciente
    . '</h5>'
    . '</small>'
    . '</div>'
    . '<div class="card-body">'
    . '<h5 class="card-title text-center">Tiene un total de  '
    . '<Strong>'
    . $mostrarTotalConsultas
    . '</Strong>'
    . ' consultas</h5>'
    // . '<p class="card-text">De las cuales has seguido el tratamiento: </p>'
    . '</div>'
    . '</div>';
  

  $id_paciente = $_GET['id'];
  $result = mysqli_query($conn,"SELECT * FROM histomed WHERE id_paciente='$id_paciente' ORDER BY fecha DESC LIMIT 6"); 
  include("inc/mostrar-historial.php");
} else if (isset($_GET['historial'])) {
  $historial = $_GET['historial'];
  $result = mysqli_query($conn,"SELECT * FROM histomed WHERE id_histo='$historial'"); 
  include("inc/editar-historial.php");
} else {
  include("inc/pacientes-lista.php");  
}

?>
                
      </div>
    </div>
          
        <?php include("inc/nav-side-doctor.php"); ?>
     </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

  </body>