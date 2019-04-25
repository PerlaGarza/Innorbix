<?php
session_start();
include_once("admin.php");

    $con= getdbdatos();
  
  
  $correo = strtolower($_POST['correo']);
  $pass = $_POST['pass'];




$sql = "SELECT * FROM pacienteinfo WHERE correo = '$correo'"; 

    $rec = mysqli_query($con, $sql); 

  $f2=mysqli_fetch_array($rec, MYSQL_ASSOC);

      $hashed_database = $f2['pass'];
      //  COMPROBACION DE IGUALDAD 
      // echo $hashed_database;

      // Funcion - password_verify - Para logear verificando el hash
      if($correo==$f2['correo'] && password_verify($pass, $hashed_database)) {

        $_SESSION['correo']=$f2['correo'];

      echo "<script>location.href='dashboard.php'</script>";

      }else{ 
        $sql = "SELECT * FROM doctorinfo WHERE correo = '$correo'"; 

    $rec = mysqli_query($con, $sql); 

  $f2=mysqli_fetch_array($rec, MYSQL_ASSOC);

      if($correo==$f2['correo'] && $pass==$f2['pass']) {

        $_SESSION['correo']=$f2['correo'];

      echo "<script>location.href='dashboard.php'</script>"; } else {

        $error = "Datos incorrectos, vuelva a intentarlo";

          require "index.php";
        }

      }
  
    