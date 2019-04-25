<?php 

session_start();

if (isset($_SESSION['correo'])) {
  echo "<script>location.href='dashboard.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nombre Del Proyecto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">
  </head>
  <body class="fondo">
    <!-- navbar -->
    
      <div class="row no-gutters ">
        <div class="col-md-3 sidepanel">
          <div class="d-none d-md-block">
            <a href="inicio.php"><p class="text-muted lead"><i class="fas fa-angle-left ml-3" aria-hidden="true"></i> Inicio</p></a>
          </div>
          <p class="pt-4 text-center lead d-none d-md-block text-secondary">Iniciar sesión</p>

          
          <svg class="d-md-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1242 808">
            <defs>
              <style>
                .a {
                  fill: url(#a);
                }

                .b {
                  font-size: 62px;
                  font-family: RionaSans-Medium, Riona Sans;
                }

                .b, .c {
                  fill: #fff;
                }

                .c {
                  font-size: 52px;
                  font-family: RionaSans-Light, Riona Sans;
                }

                .d {
                  letter-spacing: 0em;
                }

                .e {
                  letter-spacing: -0.01em;
                }

                .f {
                  letter-spacing: -0.01em;
                }

                .g {
                  letter-spacing: 0em;
                }

                .h, .i, .j {
                  opacity: 0.17;
                }

                .h {
                  fill: url(#b);
                }

                .i {
                  fill: url(#c);
                }

                .j {
                  fill: url(#d);
                }
              </style>
              <linearGradient id="a" data-name="Degradado sin nombre 35" x1="91.46" y1="116.4" x2="1286.08" y2="624.7" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#297de6e6"/>
                <stop offset="1" stop-color="#3864e2fc"/>
              </linearGradient>
              <linearGradient id="b" data-name="Degradado sin nombre 27" x1="226.31" y1="516.72" x2="1151.54" y2="910.39" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#3957dd"/>
                <stop offset="0.38" stop-color="#4860cd"/>
                <stop offset="1" stop-color="#4d8fb2"/>
              </linearGradient>
              <linearGradient id="c" x1="212.22" y1="495.13" x2="1182.24" y2="907.87" xlink:href="#b"/>
              <linearGradient id="d" x1="215.29" y1="-621.3" x2="1180.41" y2="-210.66" gradientTransform="matrix(1, 0, 0, -0.62, 0, 374.93)" xlink:href="#b"/>
            </defs>
            <title>index-morado-fixed</title>
            <path class="a" d="M1242,0V556c-90.9-44.6-169.3-19.9-213.4,3.2a567.6,567.6,0,0,1-153.3,54.5C762.9,635.9,587.7,652.5,440.5,587,202.2,481-6,680.9-6,680.9V0Z"/>
            <text class="b" transform="translate(88.8 140)" style="font-family: 'Source Sans Pro', sans-serif; font-weight: 600">INNORBITX</text>
            <text class="c" transform="translate(88.4 205.9)" style="font-family: 'Source Sans Pro', sans-serif; font-weight: 300">Consultorio Médico</text>
            <path class="h" d="M1235,568.1v12.7c-90.4-81-168.3-36.2-212.2,5.8-48,45.9-99.2,79.9-152.4,99.1-111.9,40.4-286,70.5-432.4-48.5C201,444.4-6,807.9-6,807.9V795.2S201,431.7,438,624.4c146.4,119.1,320.5,89,432.4,48.6,53.2-19.2,104.4-53.2,152.4-99.2C1066.7,531.9,1144.6,487,1235,568.1Z"/>
            <path class="i" d="M1242,622.6v4.9c-90.4-31.6-168.3-14.1-212.2,2.3a727.4,727.4,0,0,1-152.4,38.6c-111.9,15.8-286,27.5-432.4-18.9C208,574.4,1,716,1,716v-5s207-141.6,444-66.5c146.4,46.4,320.5,34.7,432.4,18.9a727.4,727.4,0,0,0,152.4-38.6C1073.7,608.5,1151.6,591,1242,622.6Z"/>
            <path class="j" d="M1243,688.2v-3.6c-90.4,23-168.3,10.2-212.2-1.7a963.5,963.5,0,0,0-152.4-28.2c-111.9-11.5-286-20-432.4,13.8C209,723.3,2,620,2,620v3.6S209,727,446,672.2c146.4-33.9,320.5-25.3,432.4-13.9a963.5,963.5,0,0,1,152.4,28.2A420,420,0,0,0,1243,688.2Z"/>
          </svg>




            <!--  TEXTO ALTERNATIVO SI NO SE USA EL SVG  -->
            <!-- <h5 class="pl-4 d-block d-md-none mt-5 monserrat-paragraph device-title"><Strong>Innorbitx</Strong></h5>
            <h5 class="pl-4 d-block d-md-none">Consultorio Médico</h5> -->
            <form action="login.php" method="post" class="form-signin">
          <div class="input-group mb-1 mt-2 px-4 grupo-input-circular">
            <input type="text" class="form-control input-circular" placeholder="Correo eléctronico" aria-label="Username" id="correo" name="correo">
          </div>
          <div class="input-group mb-2 mt-2 px-4 grupo-input-circular smooth">
            <input type="password" class="form-control input-circular" placeholder="Contraseña" aria-label="Password" id="pass" name="pass">
          </div>
          <div class="text-center">
              <?php if (isset($error)) { 
                  echo '<p class="cambiar lead pl-4 text-left mb-3 ml-1 text-danger">' . $error . ".</p>"; 
                }  ?>              
            <a href="cambiar-password"><p class="cambiar lead text-muted pl-4 ml-1 text-left mb-5">Olvidaste tu contraseña?</p></a>
            <!-- <input class="btn btn-primary" type="submit" value="Entrar"> -->
            <button class="btn btn-primary boton-circular mb-5 " type="submit">Ingresar</button>
            <!-- <h6 class="text-muted pt-5">DERECHOS RESERVADOS — INNORBITX 2018</h6> -->
          </div>
        </form>
        </div>
        <div class="col-md-9 d-none d-md-block pt-5 text-white adios container-fluid">   
          <h1 class="monserrat-title" style="font-family: 'Source Sans Pro', sans-serif; font-size: 3em; font-weight: 600; line-height: 0.6;" >INNORBITX</h1>          
            <h2 class="lead monserrat-paragraph subtitle" style="font-family: 'Source Sans Pro', sans-serif; font-size: 2.3em; font-weight: 300">Consultorio médico</h2>
            <a href="facebook.com"><i id="facebook" class="fab fa-facebook fa-2x"></i></a>
            <a href="twitter.com"><i id="twitter" class="fab fa-twitter-square fa-2x"></i></a>
            <a href="email:innorbitx@gmail.com"><i id="email" class="fas fa-envelope-square fa-2x"></i></a>
            <a href="23552555"><i id="telephone" class="fas fa-phone-square fa-2x"></i></a>
            <a href="cambiar-password"><p class="support">Tienes problemas para iniciar sesión?</p></a>
            <p class="support"></p>      
      </div>


      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


  </body>
