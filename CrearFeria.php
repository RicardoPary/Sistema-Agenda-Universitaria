
<?php

include("Conexion.php");

	$CodigoEvento=$_POST['T1'];
	$Nombre=$_POST['T2'];
	$Fecha=$_POST['T3'];
	$Descripcion=$_POST['T4'];
	$Ubicacion=$_POST['T5'];
	$Direccion=$_POST['T6'];	
	$HoraI=$_POST['T7'];
	$HoraF=$_POST['T8'];
	$tipo=$_POST['T9'];
	
		
	
$sql=$cn->prepare("INSERT INTO feria(codFeria,nombre,fecha,descripcion,
	ubicacion,direccion,horaini,horafin,tipo)
VALUE(:CodigoEvento,:Nombre,:Fecha,:Descripcion,
	:Ubicacion,:Direccion,:HoraI,:HoraF,:tipo)");
$sql->execute(array(':CodigoEvento'=>$CodigoEvento,':Nombre'=>$Nombre,':Fecha'=>$Fecha,
	':Descripcion'=>$Descripcion,':Ubicacion'=>$Ubicacion,	':Direccion'=>$Direccion,
	':HoraI'=>$HoraI,':HoraF'=>$HoraF,':tipo'=>$tipo));



$sql=mysql_query($consulta,$cn);
	
	
header("Location: Inicio.php");

?>

