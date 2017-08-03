 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agenda Universitaria</title>
<link rel="stylesheet"  href="css/Inicio.css" />
</head>

<script src="js/jquery.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() 
	{							
	/*Muestra la pagina muroInicio*/
		CargarCuerpo();			
		
		function CargarCuerpo()
		{  	
		$("#Cuerpo").load('MuroInicio.php');		
		}
		
						
	});
	     	
	</script>	



<body>


<div id="Cabeza1">
  <img src="Imagenes/mi_umsa.jpg" title="Tu Agenda Universitaria" width="218" height="71" style="float:left; margin-left:40px; margin-top: 5px;"/>

  <img src="Imagenes/Agenda.jpg" width="315" height="71" style="float:left; margin-left:40px; margin-top: 5px;"/>
  


  <form class="form" action="Login.php" method="post" style="width:350px; float:right; padding:0px; margin-bottom:3px; margin-top:3px;">
		
		<table width="340" border="0" cellpadding="0" cellspacing="0" style="margin:0px; padding:0px;">
  <tr>
    <td width="131" height="21"><label style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:11px; color:#FFFFFF; float:left; margin-left:5px; margin:2px;">Cuenta</label></td>
    <td width="16">&nbsp;</td>
    <td width="120"><label style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:11px; color:#FFFFFF; float:left; margin-left:5px; margin:2px;">Contraseña</label></td>
    <td width="19">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr>
    <td><input type="text" name="T1" required="true"  style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000000; " /></td>
    <td>&nbsp;</td>
    <td><input type="password" name="T2" required="true"  style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000000;  "/></td>
    <td>&nbsp;</td>
    <td><input name="submit" type="submit" style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:11px; color:#FFFFFF; float:left; margin-left:5px; background:#666666; border:1px #000000 solid; height:25px; cursor:pointer; font-weight:bold;" value="Acceder"/></td>
  </tr>
  <tr>
  
  <td></td>
  <td></td>  
  </tr>
</table>

			
			
		
  </form>
	
	
</div>

<div id="Antes">

</div>

<div id="Menu1">


  <ul id="Menu">
    <li><a href="inicio.php">Home</a></li> 
      <li> <a href="evenA.php">Eventos Acad&eacutemicos</a></li> 
      <li> <a href="evenS.php">Eventos sociales</a></li>
        <li> <a href="feria.php">Feria Muldidisciplinaria</a></li> 
                   
  </ul>

</div>
<div id="uno">
  <img src="Imagenes/umsa.png" title="Universidad Mayor de San Andres" width="15%" height="25%" style="float:left; margin-left:40px; margin-top: 140px;"/>
</div>


<div id="Cuerpo"></div>





</body>
</html>
