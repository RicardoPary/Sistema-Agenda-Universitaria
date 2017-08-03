<?php

include('Conexion.php');
$cod=$_GET['id'];

$sql=$cn->prepare("DELETE FROM evento_academico WHERE CodeventoA=:cod");
  $sql->execute(array(':cod'=>$cod));
  
  header('Location: Nuevo.php');

?>