<?php 


$servername = "localhost";
	$username = "root";
	$pwd = "";
	$db = "epiz_22079140_innorbitx";

// Create connection
$conn = new mysqli($servername, $username, $pwd, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



/*

	$username = "root";
	$pwd = "";


try {
  $conn = new PDO('mysql:host=localhost;dbname=innorbitx', $username, $pwd);
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo "Unable to connect";
  // echo $e->getMessage();
  exit;
}
*/