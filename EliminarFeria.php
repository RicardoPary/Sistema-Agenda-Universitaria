<?php

	include('Conexion.php');
$codf=$_GET['id'];

$sql=$cn->prepare("DELETE FROM feria WHERE codFeria=:codf");
  $sql->execute(array(':codf'=>$codf));
  


	header('Location: ConfigFeria.php');
  
  


?>