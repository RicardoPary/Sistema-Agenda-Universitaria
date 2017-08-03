<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Muro</title>

<link rel="stylesheet" href="css/Publicacion.css" type="text/css"/> 

</head>

<body>
<?php /*?><?php header('refresh:2; url=Publicacion.php');?><?php */?>
<?php	   
  include('Conexion.php'); 
  $sql=$cn->prepare("SELECT * FROM comunicado" );
  $sql->execute();
  
  
  while($op=$sql->fetch())
  { 
 
?>


<div  class="wrapper" style="width:800px; margin-bottom:15px; border:1px #B6B6B6 solid; background-color:#FFFFFF; cursor:pointer; margin-left:90px;" >

<div  style="height:51px; font-weight:bold;  margin:10px; ">
  <img src="Imagenes/3.png" width="52" height="44" style="float:left;  border:1px #B6B6B6 solid; border-radius:5px; padding:1px;"/>
  <label style="width:200px;  font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#004993; ">
  <?php echo $op['Descripcion']?></label>
</div>
 
  <div style="  margin:10px; border:1px #F2F2F2 solid;">
 <label style="width:200px; height:50px;  color:#4E4E4E; font-weight:100; "><?php echo $op['Asunto'];?></label>
  </div>
	
	<div style="font-family:Arial, Helvetica, sans-serif; font-size:14px; margin:10px; border:">
	
<label style="width:200px; height:50px;  color:#4E4E4E; font-weight:100; "><?php echo $op['Fecha'];?></label>
 
  </div>
	
</div>
<?php 
 }
?>
	

	
</body>
</html>
