<?php 
session_start();
include ('admin.php');
include ('fecha.php');

$con = getdbdatos();

$nombre = "José Luis Garza Ramos"; 
$id = "INX347844";
$registro = "12 de enero del 2018";
$edad = 20;
$peso = 50;
$cedula = 421464264;
$puesto = "Neurología";

$citas = array(
"Alucinaciones constantes y dolor de la cabeza en la parte frontal",
"Lesión de brazo",
"Fiebre",
"Dolor de estomago",
"Fractura de tobillo",
"Inflamación de rodilla"
);

$fechas = array(
"10 de Febrero del 2018",
"9 de Enero del 2018",
"2 de Enero del 2018",
"4 de Enero del 2018",
"5 de Enero del 2018",
"2 de Enero del 2018",



);

$sql = "SELECT id FROM pacienteinfo ORDER BY id DESC LIMIT 1";
$results = $con->query($sql);

while($row = mysqli_fetch_array($results))
  {   
  /* echo  $row['id'];
  echo "<br>"; */
  $id_paciente = ($row['id'] +1);
  $paddedNum = sprintf("%06d", $id_paciente);
  $resultado = "INX" . $paddedNum;

  $mostrar = (string)$resultado;
  /* echo $mostrar;
  echo "<br>"; */
  }

$contra = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789') , 0 , 10 );


  mysqli_query($con, $sql);
  mysqli_close($con);


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
        <a class="nav-link" href="#">Perfil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pacientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Datos generales</a>
      </li>
    </ul>
    <hr>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 alinear">
      <li class="nav-item">
        <a class="nav-link" href="inicio.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Salir</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 mr-md-0 col-10" type="search" placeholder="Buscar">
      <button class="btn btn-outline-light my-2 my-sm-0 col-2" type="submit"><i class="fas fa-search" style="font-size: 0.8em;"></i></button>
    </form>
  </div>
</nav>


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
              <p class="pt-4 text-center lead d-block text-secondary ">Alta de paciente</p>


              <div class="ml-3 mr-3 card d-block movimiento-arriba mb-5">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $nombre; ?></h5>
                  <h5 class="card-subtitle mb-3 text-muted"><?php echo $id; ?></h5>
                  <hr>
                    <div class="personal-information">
                      <form action="registro-paciente.php" method="post" class="form ">
                      <div class="mb-3 d-block d-lg-block col-sm-12 col-md-12 container">


                        <h6 class="lead texto-celeste mb-3">Información general</h6>
                        <div class="input-group mb-3">
                          <input readonly="readonly" type="text" class="form-control" value="<?php echo $mostrar; ?>" placeholder="<?php echo $mostrar; ?>" id="id_paciente" name="id_paciente">
                        </div>
                        <div class="input-group mb-3">
                          <input readonly="readonly" type="text" class="form-control" value="<?php echo $fecha; ?>" placeholder="<?php echo $fecha; ?>" id="registro" name="registro">
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Sexo" id="sexo" name="sexo" required>
                        </div>

                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Edad" id="edad" name="edad" required>
                        </div>

                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Altura" id="altura" name="altura" required>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Peso" id="peso" name="peso" required>
                        </div>
                        <hr>

                        <h6 class="lead mt-5 texto-celeste mb-3">Información personal</h6>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" required>
                        </div>

                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Apellidos" id="apellido" name="apellido" required>
                        </div>

                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Teléfono" id="telefono" name="telefono" required>
                        </div>

                         <div class="input-group mb-3">
                          <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Correo eléctronico" id="correo" name="correo" required>
                        </div>
                        <hr class="mt-5">

                        <h6 class="lead mt-5 texto-celeste mb-3">Contraseña</h6>
                        <div class="input-group mb-0">
                          <input readonly="readonly" type="text" class="form-control" id="pass" name="pass" value="<?php echo $contra; ?>" placeholder="<?php  echo $contra; ?>">
                        </div>

                     <!--   <h6 class="lead mt-5 texto-celeste mb-3">Alergia(médicamentos)</h6>
                        <div class="input-group mb-0">
                          <input type="text" class="form-control" value="NULL" placeholder="Ej. Alergia: paracetamol" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div> -->
                      </div>
                      <div class="text-center mb-3">
                        <button type="submit" class="btn btn-primary">DAR DE ALTA</button>
                      </div>
                    </form>    
                  </div>
                </div>
              </div>
            </div>     
        </div>
          
        <div class="row no-gutters exacto d-none d-sm-block" style="height: 100%;">

                <div class="col-md-2 sidepanel-third">


                  <a href="inicio.php"><p class="text-white lead"><i class="fas fa-angle-left ml-3" aria-hidden="true"></i> Inicio</p></a>
                  <h5 class="pl-4 d-none d-lg-block mt-2"><Strong>Innorbitx</Strong></h5>
                  <h5 class="pl-4 d-none d-lg-block mt-1">Consultorio Médico</h5>
                  <hr style="border-color: rgba(255,255,255, 0.2);">
                  <div class="vinculos">
                    <a class="vinculo movimiento-suave" href="google.com"><h6 class="movimiento-suave pl-4 d-none d-lg-block mt-5">Perfil</h6></a>
                    <a class="vinculo" href="google.com"><h6 class="movimiento-suave pl-4 d-none d-lg-block mt-4">Pacientes</h6></a>
                    <a class="vinculo" href="google.com"><h6 class="movimiento-suave pl-4 d-none d-lg-block mt-4">Datos generales</h6></a>
                    <a class="vinculo" href="google.com"><h6 class="movimiento-suave pl-4 d-none d-lg-block mt-4">Alta de pacientes</h6></a>
                    <a class="vinculo" href="google.com"><h6 class="movimiento-suave pl-4 d-none d-lg-block mt-5">Salir</h6></a>
                  </div>
                    <p class="pl-4 d-block d-md-none">Consultorio Médico</p>
                  <p class="pt-4 text-center lead d-block d-md-none text-secondary">Información usuario</p>

                  
             </div> 
        </div>
     </div>


     







      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     


  </body>