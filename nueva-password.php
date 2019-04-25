<?php 

session_start(); 

include("admin.php");
include("conexion.php");

// if (isset($_GET["error"])) {
//   echo '<p>Las contraseñas no coinciden</p>';
// }

if (isset($_GET["error"])) {
    $error = "*Las contraseñas no coinciden";
} else {
    $error = null;
}

if (!isset($_GET["token"])) {
    echo "<script>location.href='404.php'</script>";
} elseif (isset($_GET["token"])) {
    $token = $_GET["token"];
    $expiracion = date('Y-m-d H:i:s', strtotime('+900 seconds'));
    $result = mysqli_query($conn,"SELECT expiracion, usado FROM resetpass WHERE token='$token'");
    $estadoDelToken = mysqli_fetch_assoc($result);
    $estadoDelTokenExpiracion = $estadoDelToken['expiracion'];
    $estadoDelTokenUsado = $estadoDelToken['usado'];
    if ( $estadoDelTokenExpiracion < $expiracion && $estadoDelTokenUsado == 0 ) {
        $result = mysqli_query($conn,"SELECT * FROM resetpass WHERE token='$token'");
        $verificar_token = mysqli_fetch_assoc($result);
        $usuario = $verificar_token['id_paciente'];

        $result = mysqli_query($conn,"SELECT * FROM pacienteinfo WHERE id_paciente='$usuario'");
        $usuario_token = mysqli_fetch_assoc($result);
        $correo = $usuario_token['correo'];
    } else {
        echo "<script>location.href='404.php'</script>";
    }
} else {
    echo "<script>location.href='404.php'</script>";
}
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
            <p class="borde-superior text-left">Obten tu contraseña!</p>
            <i class="fas fa-key fa-5x aparecer-icono" style="color: #0F6FFF;"></i>
                <p class="fluido text-dark confirmacion text-center mover-primero pb-0">Nueva contraseña</p>
                <p class="fluido text-dark lead text-justify text-center aparecer-icono-lento">Asegurate de usar una contraseña segura (8 caracteres, mayusculas, minusculas y un simbolo especial).</p>
                    <form action="resetear-contrasena.php" method="post" class="form ">
                        <div class="input-group mb-3 d-none">
                            <input type="email" class="form-control" name="correo" id="correo" value="<?php echo $correo; ?>" readonly required>
                        </div>
                        <div class="input-group mb-3 d-none">
                            <input type="text" class="form-control" name="token" id="token" value="<?php echo $token; ?>" readonly required>
                        </div>
                        <div class="input-group mb-3 grupo-input-password">
                            <input type="password" class="form-control input-circular smooth-pass" name="password" id="password" placeholder="Nueva contraseña" required>
                        </div>
                        <div class="input-group mb-3 grupo-input-password">
                            <input type="password" class="form-control input-circular smooth-pass" name="password-repetir" id="password-repetir" placeholder="Repetir contraseña" required>
                        </div>
                        <p class="text-danger text-left mb-2"><?php echo $error; ?></p>
                        <button type="submit" class="btn btn-outline-primary text-center">Continuar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>