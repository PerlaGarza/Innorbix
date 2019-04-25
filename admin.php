<?php

function getdb(){
	$servername = "localhost";
	$username = "root";
	$pwd = "";
	$db = "epiz_22079140_innorbitx";
	$conn = mysqli($servername, $username, $pwd);
	
	if($conn->connect_error){
		echo "No se conecto.";
	}else{
		echo "Si se conecto.";	
	}
	
	$dbconn = mysqli_select_db($conn, $db);
	return $conn;
}

function getdbdatos(){
	$servername = "localhost";
	$username = "root";
	$pwd = "";
	$db = "epiz_22079140_innorbitx";
	$con = mysqli_connect($servername, $username, $pwd, $db);
	
	if($con->connect_error){
		echo "No se conecto.";
		exit;
	}

	return $con;	
	
}
?>