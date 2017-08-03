<?php
include("Conexion.php");

	$a1=$_POST['T1'];
	$a2=$_POST['T2'];
		
	$sql=$cn->prepare('SELECT * FROM usuario WHERE Nick=:Correo AND Clave=:Contra');	
	$sql->execute(array(':Correo' => $a1,':Contra' => $a2 ));		
	$resultado = $sql->fetch();
	
	$tam=count($resultado);	
  
	$Tipo=$resultado['Tipo'];
	$cod=$resultado['CodigoCuenta'];
	
	
	if($tam>1)		
	{
			 																	
											
	    			header("Location: Nuevo.php");	
	}
	else
	{
	header('Location: Inicio.php');
	}	

?>