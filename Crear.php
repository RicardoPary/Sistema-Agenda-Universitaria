<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Crear Cuenta</title>
</head>

<body>
<?php
$Codigo=$_GET['id'];

include("conexion.php");


	$CodeventoA=$_POST['CodeventoA'];
	$nombre=$_POST['nombre'];
	$fecha=$_POST['fecha'];
	$descripcion=$_POST['descripcion'];
	$titulo=$_POST['titulo'];
	$tematica=$_POST['tematica'];
	$ubicacion=$_POST['ubicacion'];
	$direccion=$_POST['direccion'];
	$material=$_POST['material'];
	$horafin=$_POST['horafin'];
	
	

$consulta="INSERT INTO evento_academico(CodeventoA,nombre,fecha,descripcion,titulo,tematica,ubicacion,direccion,material,horafin)
VALUE('$CodeventoA',$nombr,$fecha,$descripcion,$titulo,$tematica,$ubicacion,$direccion,$material,$horafin)";
$sql=mysql_query($consulta,$cn);
	
	
header("Location: evenA.html");
?>



</body>
</html>
