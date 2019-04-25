<?php

$result = mysqli_query($conn,'SELECT nombre, apellido, registro FROM pacienteinfo');

if($result === FALSE) {
    die(mysql_error("error message for the user")); 
}



$result2 = mysqli_query($conn,"SELECT nombre FROM doctorinfo WHERE correo='".$_SESSION['correo']."' ");
$row2 = mysqli_fetch_assoc($result2);

$result2 = mysqli_query($conn,"SELECT apellido FROM doctorinfo WHERE correo='".$_SESSION['correo']."' ");
$row3 = mysqli_fetch_assoc($result2);

$result2 = mysqli_query($conn,"SELECT id_doctor FROM doctorinfo WHERE correo='".$_SESSION['correo']."' ");
$row4 = mysqli_fetch_assoc($result2);

$result2 = mysqli_query($conn,"SELECT cedula FROM doctorinfo WHERE correo='".$_SESSION['correo']."' ");
$row5 = mysqli_fetch_assoc($result2);

$result2 = mysqli_query($conn,"SELECT registro FROM doctorinfo WHERE correo='".$_SESSION['correo']."' ");
$row6 = mysqli_fetch_assoc($result2);

$result2 = mysqli_query($conn,"SELECT edad FROM doctorinfo WHERE correo='".$_SESSION['correo']."' ");
$row7 = mysqli_fetch_assoc($result2);

$result2 = mysqli_query($conn,"SELECT especialidad FROM doctorinfo WHERE correo='".$_SESSION['correo']."' ");
$row8 = mysqli_fetch_assoc($result2);