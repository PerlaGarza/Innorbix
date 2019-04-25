<?php 
session_start();
include("conexion.php");
include("fecha.php");

$result = mysqli_query($conn,"SELECT id_doctor FROM doctorinfo WHERE correo='".$_SESSION['correo']."'");
$row = mysqli_fetch_assoc($result);
$tipo = substr($row["id_doctor"], 0, 4);

$result1 = mysqli_query($conn,"SELECT id_paciente FROM pacienteinfo WHERE correo='".$_SESSION['correo']."'");
$row1 = mysqli_fetch_assoc($result1);
$tipo1 = substr($row1["id_paciente"], 0, 3);

if ($tipo == "INNX") {
  include("inc/panel-doctor.php");
} else if ($tipo1 == "INX") {
  include("inc/panel-paciente.php");
}

?>