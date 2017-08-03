<?php

include('Conexion.php');
$cods=$_GET['id'];

$sql=$cn->prepare("DELETE FROM evento_social WHERE codeventoS=:cods");
  $sql->execute(array(':cods'=>$cods));
  


	header('Location: ConfigSocial.php');

	
?>