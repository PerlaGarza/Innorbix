<?php
session_start();
include ('admin.php');
include ('conexion.php');
include ('fecha.php');
include("inc/navbar-doctor.php");

$con = getdbdatos();
$id = NULL;

if(ISSET($_GET["id"])) {
  $id = $_GET["id"];
}


$result2 = mysqli_query($conn,"SELECT nombre, apellido, id_doctor FROM doctorinfo WHERE correo='".$_SESSION['correo']."' ");
$row2 = mysqli_fetch_assoc($result2);



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
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  </head>


  <body class="fondo-blanco">

    <div class="row no-gutters exacto">
      <div class="col-lg-10 sidepanel-second">
        <!-- <a href="index.php"><p class="text-muted lead d-none d-sm-block"><i class="fas fa-angle-left ml-3" aria-hidden="true"></i> Inicio</p></a> -->
        <h5 class="pl-4 d-block d-lg-none mt-3"><Strong>Innorbitx</Strong></h5>
          <h5 class="pl-4 d-block d-lg-none">Consultorio Médico</h5>
          <div class="container bajar-texto">

          <div class="ml-3 mr-3 card d-block movimiento-arriba mb-5 espacio-superior">
            <div class="card-body">
              <h5 class="pt-2 pb-3 text-center card-title">Nueva consulta</h5>
              <h5 class="card-title"><?php echo $row2["nombre"] . " " .$row2["apellido"]; ?></h5>
              <h5 class="card-subtitle mb-3 text-muted"><?php echo $row2["id_doctor"]; ?></h5>
              <hr>
            <div class="personal-information">

            <?php
            if($id == NULL) {
              echo '<form action="busqueda" method="post" class="form ">'
                  . '<div class="mb-3 d-block d-lg-block col-sm-12 col-md-12 container">'

                  . '<h6 class="lead texto-celeste mb-3">Busqueda de paciente</h6>'


                  . '<div class="input-group mb-3">'
                  . '<input type="text" class="form-control" placeholder="Nombre o id de paciente" id="id" name="id" required>'
                  . '</div>'
                  . '<hr class="mt-5">'


                  . '</div>'
                  . '<div class="text-center mb-3">'
                  . ' <button type="submit" class="btn btn-outline-secondary">Buscar paciente</button>'
                  . '</div>';
            } else {
              $result = mysqli_query($conn,"SELECT id_paciente FROM pacienteinfo WHERE id_paciente ='$id'");
              $row = mysqli_fetch_assoc($result);

              if ($id == $row["id_paciente"]) {
                $result = mysqli_query($conn,"SELECT id_paciente, nombre, apellido FROM pacienteinfo WHERE id_paciente LIKE '%$id%' OR nombre LIKE '%$id%'");
                $row2 = mysqli_fetch_assoc($result);

                echo  '<form action="nueva-consulta" method="post" class="form">'
                      . '<div class="mb-3 d-block d-lg-block col-sm-12 col-md-12 container">'

                      . '<a href="consulta"><p class="text-secondary text-right"><i class="fas fa-user-times mr-2"></i>No es el paciente correcto?</p></a>'
                      . '<h6 class="lead texto-celeste mb-3">Información del paciente: </h6>'




                      . '<div class="input-group mb-3">'
                      . '</i><input readonly="readonly" type="text" class="form-control" id="nombre-completo" name="nombre-completo"' . 'value="' . $row2["nombre"] . " " . $row2["apellido"] . '"'  . '>'
                      . '</div>'


                      . '<div class="input-group mb-3">'
                      . '<input readonly="readonly" type="text" class="form-control" id="id" name="id"' . 'value="' . $_GET["id"] . '"'  . '>'
                      . '</div>'
                      . '<a class="badge badge-primary mb-3 abrirBoton">Mostrar antecedentes</a>'

                      . '<div class="mostrarLista fade-in">'
                      . '<p class="mostrarTexto ocultar">Hola</p>'
                      . '<ul class="list-group">'
                      . '<li class="list-group-item">Cras justo odio</li>'
                      .  '<li class="list-group-item">Dapibus ac facilisis in</li>'
                      .  '<li class="list-group-item">Morbi leo risus</li>'
                      .  '<li class="list-group-item">Porta ac consectetur ac</li>'
                      .  '<li class="list-group-item">Vestibulum at eros</li>'
                      .  '</ul>'
                      .  '</div>'


                      . '</div>'
                      . '<div class="text-center mb-3">'
                      . ' <button type="submit" class="btn btn-outline-secondary">Realizar consulta</button>'
                      . '</div>';
              }else {

              echo "<script>location.href='404'</script>";
            }

              }
            ?>

                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <?php include("inc/nav-side-doctor.php"); ?>
     </div>







<script src="js/prueba.js"></script>



      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>




  </body>
