<?php
include("admin.php");

$con = getdbdatos();

$id_paciente = $_POST["id_paciente"];
$razon = $_POST["razon"];
$diagnostico = ucfirst ($_POST['diagnostico']);
$alergias = ucfirst ($_POST['alergias']);
$observaciones = ucfirst ($_POST['observaciones']);
$estilovida = ucfirst ($_POST['estilovida']);
$tratamiento = ucfirst ($_POST['tratamiento']);
$fecha = $_POST['fecha'];



$sql = "INSERT INTO histomed (id_histo, id_paciente, razon, diagnostico, alergias, observaciones, estilovida, tratamiento, fecha) VALUES ('', '$id_paciente', '$razon', '$diagnostico', '$alergias', '$observaciones', '$estilovida', '$tratamiento', '$fecha')";

  mysqli_query($con, $sql);
  mysqli_close($con);

  echo '<script>alert("Se ha registrado correctamente")</script> ';
  echo "<script>location.href='consulta'</script>";


