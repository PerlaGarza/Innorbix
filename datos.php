<?php

$result = mysqli_query($conn,"SELECT nombre FROM pacienteinfo WHERE correo='".$_SESSION['correo']."' ");
$row = mysqli_fetch_assoc($result);

$result = mysqli_query($conn,"SELECT apellido FROM pacienteinfo WHERE correo='".$_SESSION['correo']."' ");
$row2 = mysqli_fetch_assoc($result);

$result = mysqli_query($conn,"SELECT id_paciente FROM pacienteinfo WHERE correo='".$_SESSION['correo']."' ");
$row3 = mysqli_fetch_assoc($result);

$result = mysqli_query($conn,"SELECT edad FROM pacienteinfo WHERE correo='".$_SESSION['correo']."' ");
$row4 = mysqli_fetch_assoc($result);

$result = mysqli_query($conn,"SELECT peso FROM pacienteinfo WHERE correo='".$_SESSION['correo']."' ");
$row5 = mysqli_fetch_assoc($result);

$result = mysqli_query($conn,"SELECT altura FROM pacienteinfo WHERE correo='".$_SESSION['correo']."' ");
$row6 = mysqli_fetch_assoc($result);

$result = mysqli_query($conn,"SELECT registro FROM pacienteinfo WHERE correo='".$_SESSION['correo']."' ");
$row7 = mysqli_fetch_assoc($result);