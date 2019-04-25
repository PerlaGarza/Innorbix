<?php
session_start();
include ("admin.php");
include ("fecha.php");
include ("conexion.php");
include("inc/navbar-doctor.php");

$con = getdbdatos();

$nombre_completo = $_POST["nombre-completo"];
$id = $_POST["id"];

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
    <!-- navbar -->

      <div class="row no-gutters exacto">
        <div class="col-lg-10 sidepanel-second">
          <!-- <a href="index.php"><p class="text-muted lead d-none d-sm-block"><i class="fas fa-angle-left ml-3" aria-hidden="true"></i> Inicio</p></a> -->
          <h5 class="pl-4 d-block d-lg-none mt-3"><Strong>Innorbitx</Strong></h5>
            <h5 class="pl-4 d-block d-lg-none">Consultorio Médico</h5>
            <div class="container bajar-texto">


              <div class="ml-3 mr-3 card d-block movimiento-arriba mb-5 espacio-superior">
                <div class="card-body">
                  <h5 class="pt-2 pb-3 text-center card-title">Nueva consulta</h5>
                  <h5 class="card-title"><?php echo $row2["nombre"] . " " . $row2["apellido"]; ?></h5>
                  <h5 class="card-subtitle mb-3 text-muted"><?php echo $row2["id_doctor"]; ?></h5>
                  <hr>
                    <div class="personal-information">
                      <form action="historial-medico.php" method="post" class="form ">
                      <div class="mb-3 d-block d-lg-block col-sm-12 col-md-12 container">


                        <h6 class="lead texto-celeste mb-3">Información del paciente</h6>
                        <div class="input-group mb-3">
                          <input readonly="readonly" type="text" class="form-control borrar-estilo" value="<?php echo $nombre_completo; ?>" placeholder="<?php echo $nombre_completo; ?>" id="nombre_completo" name="nombre_completo">
                        </div>
                        <div class="input-group mb-3">
                          <input readonly="readonly" type="text" class="form-control" value="<?php echo $id; ?>" placeholder="<?php echo $id; ?>" id="id_paciente" name="id_paciente">
                        </div>
                        <h6 class="lead texto-celeste mb-3 mt-5">Fecha de la consulta</h6>
                        <div class="input-group mb-3">
                          <input readonly="readonly" type="text" class="form-control" value="<?php echo $fecha; ?>" placeholder="<?php echo $fecha; ?>" id="fecha" name="fecha">
                        </div>
                        <h6 class="lead texto-celeste mb-3 mt-5">Detalles de la consulta</h6>
                        <hr>
                        <h6 class="lead texto-celeste mb-3 mt-4">Diagnostico</h6>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Razón de la consulta" id="razon" name="razon">
                        </div>
                        
                        <div class="input-group mb-3">
                          <textarea class="form-control" id="diagnostico" name="diagnostico" rows="5" placeholder="Ingresa el diagnostico..." required></textarea>
                        </div>

                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Alergias (opcional)" id="alergias" name="alergias">
                        </div>

                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Observaciones (opcional)" id="observaciones" name="observaciones">
                        </div>

                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Estilo de vida" id="estilovida" name="estilovida" required>
                        </div>

                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Tratamiento" id="tratamiento" name="tratamiento" required>
                        </div>

                        </br>
                        <hr>


                     <!--   <h6 class="lead mt-5 texto-celeste mb-3">Alergia(médicamentos)</h6>
                        <div class="input-group mb-0">
                          <input type="text" class="form-control" value="NULL" placeholder="Ej. Alergia: paracetamol" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div> -->
                      </div>
                      <div class="text-center mb-3">
                        <button type="submit" class="btn btn-outline-secondary">Finalizar consulta</button>
                      </div>
                    </form>
                  </div>
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
