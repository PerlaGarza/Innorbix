<?php 
include("admin.php");
include("conexion.php");

$con = getdbdatos();

$correo = $_POST['correo'];
$token = $_POST['token'];
$password = $_POST['password'];
$passwordRepetir = $_POST['password-repetir'];
$passwordHashed = password_hash($password, PASSWORD_DEFAULT);

if ($password === $passwordRepetir) {
$sql = "UPDATE pacienteinfo SET pass='$passwordHashed' WHERE correo='$correo'";
  mysqli_query($con, $sql);
  mysqli_close($con);

  echo "<script>location.href='confirmacion-password.php'</script>";
} else {
  $error = true;
  echo "<script>location.href='nueva-password.php?token=" . $token . "&error=$error'</script>";
}