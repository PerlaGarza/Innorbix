<?php
include("admin.php");

$con = getdbdatos();

$id = $_POST['id_paciente'];
$sexo = ucwords($_POST['sexo']);
$edad = $_POST['edad'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$nombre = ucwords($_POST['nombre']);
$apellido = ucwords($_POST['apellido']);
$telefono = $_POST['telefono'];
$correo = strtolower($_POST['correo']);
$pass = $_POST['pass'];
$registro = $_POST['registro'];

$sql = "INSERT INTO pacienteinfo (id_paciente, sexo, edad, altura, peso, nombre, apellido, telefono, correo, pass, registro) VALUES ('$id', '$sexo', '$edad', '$altura', '$peso', '$nombre', '$apellido', '$telefono', '$correo', '$pass', '$registro')";

  mysqli_query($con, $sql);
  mysqli_close($con);

  echo '<script>alert("Se ha registrado correctamente")</script> ';
  echo "<script>location.href='alta'</script>";

?>