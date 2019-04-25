<? php

function get_patients_count($category = null){
	include("conexion.php");

	try {
   $sql = "SELECT COUNT(id_paciente) FROM pacienteinfo";
   if (!empty($category)) {
       $result = $db->prepare(
         $sql
         . " WHERE LOWER(category) = ?"
       );
     $result->bindParam(1, $category, PDO::PARAM_STR);
   } else {
       $result = $db->prepare($sql);
   }
     $result->execute();
  } catch (Exception $e) {
    echo "bad query";
  }
}