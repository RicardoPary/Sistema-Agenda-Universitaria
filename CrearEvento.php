
<?php


include("Conexion.php");


	$CodigoEvento=$_POST['T1'];
	$Nombre=$_POST['T2'];
	$HoraI=$_POST['T3'];
	$HoraF=$_POST['T4'];
	$Material=$_POST['Material'];
	$Descripcion=$_POST['T5'];
	$Ubicacion=$_POST['T6'];
	$Direccion=$_POST['T7'];
	$Costo=$_POST['T8'];
	$Auspiciador=$_POST['T9'];
	$Fecha=$_POST['T10'];
	
	$F1=$_POST['T11'];
	$F2=$_POST['T12'];
	
	
$sql=$cn->prepare("INSERT INTO evento_academico(CodeventoA,nombre,fecha,descripcion,titulo,tematica,ubicacion,direccion,material,horaini,horafin)
VALUE(:CodigoEvento,:Nombre,:Fecha,:Descripcion,:prueba1,:prueba2,:Ubicacion,:Direccion,:Material,:HoraI,:HoraF)");
$sql->execute(array(':CodigoEvento'=>$CodigoEvento,':Nombre'=>$Nombre,':Fecha'=>$Fecha,':Descripcion'=>$Descripcion,
	':prueba1'=>$F1,':prueba2'=>$F2,':Ubicacion'=>$Ubicacion,':Direccion'=>$Direccion,':Material'=>$Material,':HoraI'=>$HoraI,':HoraF'=>$HoraF));



$sql=mysql_query($consulta,$cn);
	
	
header("Location: Nuevo.php");

?>

