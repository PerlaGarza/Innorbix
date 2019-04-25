<?php
include("admin.php");

$con = getdbdatos();

$id = $_POST['id_paciente'];
$edad = $_POST['edad'];
$nombre = ucwords($_POST['nombre']);
$apellido = ucwords($_POST['apellido']);
$especialidad = ucwords($_POST['especialidad']);
$cedula = ucwords($_POST['cedula']);
$correo = strtolower($_POST['correo']);
$pass = $_POST['pass'];
$registro = $_POST['registro'];




$sql = "INSERT INTO doctorinfo (id_doctor, edad, nombre, apellido, cedula, correo, pass, registro, especialidad) VALUES ('$id', '$edad', '$nombre', '$apellido', '$cedula', '$correo', '$pass', '$registro', '$especialidad')";

  mysqli_query($con, $sql);
  mysqli_close($con);

  echo '<script>alert("Se ha registrado correctamente")</script> ';
  echo "<script>location.href='alta-doctor'</script>";
