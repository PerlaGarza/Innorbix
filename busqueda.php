<?php
session_start();
include ("admin.php");
include ("conexion.php");
include ("inc/navbar-doctor.php");
include ("inc/nav-side-doctor.php");

  $id = strtolower($_POST['id']);

$con = getdbdatos();



$result = mysqli_query($conn,"SELECT id_paciente, nombre, apellido FROM pacienteinfo WHERE id_paciente LIKE '%$id%' OR nombre LIKE '%$id%'");
$row = mysqli_fetch_assoc($result);





?>

<!DOCTYPE html>
<html lang="en" >
  <head >
    <title>Nombre Del Proyecto</title>
    <!-- Required meta tags -->
    <meta charset="utd-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  <body class="fondo-blanco">

      <div class="row no-gutters exacto">
        <div class="col-lg-10 sidepanel-second">
          <!-- <a href="index.php"><p class="text-muted lead d-none d-sm-block"><i class="fas fa-angle-left ml-3" aria-hidden="true"></i> Inicio</p></a> -->
          <h5 class="pl-4 d-block d-lg-none mt-3"><Strong>Innorbitx</Strong></h5>
            <h5 class="pl-4 d-block d-lg-none">Consultorio Médico</h5>
            <div class="container bajar-texto">

                <div class="schedule-table mb-5">
                  <p class="pt-5 text-center lead d-block text-secondary">Búsqueda</p>
                  <div class="card ml-3 mr-3 mt-3 movimiento-arriba">
                      <ul class="list-group list-group-flush justify">

                        <?php
                        if (!empty($row["id_paciente"])) {
                        	echo '<li class="list-group-item text-center bg-primary text-white">Pacientes que coinciden con la búsqueda:</li>';
                          echo '<a class="a-text-busqueda" href="consulta'
                            . '?id='
                          	. $row["id_paciente"]
                            . '"'
                          	. '<li class="list-group-item no-hypertext">'
                            . $row["nombre"]
                            . " "
                            . $row["apellido"]
                            . '<p><small class="a-text-busqueda-id" style="float: right;">&#8212; '
                            . $row["id_paciente"]
                            .'</small></p></a>';
                        while($row = $result->fetch_array()){
                          	echo '<a class="a-text-busqueda" href="consulta'
                            . '?id='
                          	. $row["id_paciente"]
                            . '"'
                          	. '<li class="list-group-item no-hypertext">'
                            . $row["nombre"]
                            . " "
                            . $row["apellido"]
                            . '<p><small class="a-text-busqueda-id" style="float: right;">&#8212; '
                            . $row["id_paciente"]
                            .'</small></p></a>';
                            
                            
                        }
                    } else {
                    	echo  '<h4 class="mt-5 mx-3 my-3 mb-5 lead text-center">'
                    	. 'No hay resultados para la búsqueda: '
                    	. '"'
                    	. $_POST["id"]
                    	. '"'
                    	. '<br>'
                    	. '<a href="consulta">'
                    	. '<button type="submit" class="btn btn-outline-secondary mt-5">Reintentar</button>'
                      . '</a>'
                      . ' '
                      . '<a href="alta">'
                    	. '<button type="submit" class="btn btn-outline-secondary mt-5">Nuevo paciente</button>'
                    	. '</a>'
                    	. '</h4>';
                    }
                    ?>
                      </ul>
                    </div>
                </div>
              </div>

        </div>

        <?php include("inc/nav-side-doctor.php"); ?>
     </div>










      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>




  </body>
