<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Cuentas</title>

<link rel="stylesheet" href="Estudiante.css" type="text/css" />	
<link href="Jquery-ui/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="js/jquery.mCustomScrollbar.css">

<script src="js/jquery.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>


	
<script>window.jQuery || document.write('<script src="../js/minified/jquery-1.11.0.min.js"><\/script>')</script>	
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>			

<script type="text/javascript">
	$(document).ready(function() 
	{							
	
		setInterval(CargarContactos,2000);
			
		CargarCuerpo();			
		
		function CargarCuerpo()
		{  var codigo=<?php echo $_GET['id']; ?>;		
		$("#Cuerpo").load('Muro2.php',{id:codigo});		
		}
		
		function CargarContactos()
				{
				
		var codigo=<?php echo $_GET['id']; ?>;
		
		$("#Contactos").load('Contactos.php',{id:codigo});	
		
				/*	$.ajax(
					{
					type: "POST",
					url: "Contactos.php"				
					}).done(function(info){
				
					$("#Contactos").html(info);
					
					console.log(info);})
				    });	*/		
				}			
						
	});
	     	
	</script>	

<script type="text/javascript">
$(document).ready(function()
{
   $("#nav a").each(function(){
      var href = $(this).attr("href");		   
	  $(this).attr({ href: "#"});
	  
      $(this).click(function(){
	     var codigo=<?php echo $_GET['id'];?>;
         $("#Cuerpo").load(href,{id:codigo});		 
      });
   });
});		
</script>

<script type="text/javascript">
$(document).ready(function()
{
      $("#Aula").each(function()
	  {
      var href = $(this).attr("href");		   
	  $(this).attr({ href: "#"});	  
		  $(this).click(function()
		  {
			 var codigo=<?php echo $_GET['id'];?>;
			 $("#Cuerpo").load(href,{id:codigo});		 
		  });
      });	  
	  
	  $("#Biblioteca").each(function()
	  {
      var href = $(this).attr("href");		   
	  $(this).attr({ href: "#"});	  
		  $(this).click(function()
		  {
			 var codigo=<?php echo $_GET['id'];?>;
			 $("#Cuerpo").load(href,{id:codigo});		 
		  });
      });
	  
	  $("#Videos").each(function()
	  {
      var href = $(this).attr("href");		   
	  $(this).attr({ href: "#"});	  
		  $(this).click(function()
		  {
			 var codigo=<?php echo $_GET['id'];?>;
			 $("#Cuerpo").load(href,{id:codigo});		 
		  });
      }); 
	  
      $("#Muros").each(function()
	  {
      var href = $(this).attr("href");		   
	  $(this).attr({ href: "#"});	  
		  $(this).click(function()
		  {
			 var codigo=<?php echo $_GET['id'];?>;
			 $("#Cuerpo").load(href,{id:codigo});		 
		  });
      }); 
   
});		
</script>
	
			
</head>

<body>	
<?php	   
  include('Conexion.php');
  $cod=$_GET['id'];
  
  $sql=$cn->prepare("SELECT * FROM cuenta WHERE CodigoCuenta=:Codigo");
  $sql->execute(array(':Codigo' => $cod ));
  $op= $sql->fetch();

 
  $sql2=$cn->prepare("SELECT * FROM cuenta WHERE CodigoCuenta=:Codigo");
  $sql2->execute(array(':Codigo'=>$cod));
  $op2=$sql2->fetch();  
  $CI=$op2['NumeroDocumento']; 
  
  $sql3=$cn->prepare("SELECT * FROM persona WHERE NumeroDocumento=:ci");
  $sql3->execute(array(':ci'=>$CI));
  $op3=$sql3->fetch();   
?>
  
<div class="cabeza"> 
<ul id="menu">
 
   <table width="100%" border="0" cellspacing="0" cellpadding="0">   
     <tr>	 
       <td width="176" ></td>	   
       <td width="25"><img src="Imagenes/Dibujoffffddd.JPG" width="25" height="26"/></td>
	   <td width="272">
	   <form action="" method="get" style="margin:0px; padding:0px;">
	     <input name="Input" id="caja1" type="text" placeholder="        Busca personas, lugares y cosas "/>
	   </form>	   </td>
	   
  <td width="139"></td>
  
  <td width="29">
  <a href="Muro2.php" id="Muros"><img src="Imagenes/Mensaje2.PNG" class="iconos"/></a>  </td>
  	   
  <td width="29">
  <a href="Videos.php" id="Videos"><img src="Imagenes/Videos.PNG" class="iconos"/></a>  </td>
  	   
  <td width="29">
  <a href="Aula.php" id="Aula"><img src="Imagenes/Pizarra.PNG" class="iconos"/></a>  </td>
	   	   
  <td width="29">
  <a href="Biblioteca.php" id="Biblioteca"><img src="Imagenes/Libros3.PNG" class="iconos"/>  </a>  </td>	   
  <td width="71"><img src=<?php echo $op['Foto'];?> width="30" height="26" class="foto2"/> </td>      
  <td width="65">	  
  <li><strong><?php echo $op2['Nick'];?></strong></li>  </td>
       
  <td width="100">
  <li><strong>Contacto</strong>
     <ul id="lista1">
	 <li> <a href="">Muro</a></li>
	 <li> <a href="">Libreta Digital</a></li>
	 <li> <a href="">Inscripcion</a></li>
	 <li> <a href="Close.php?id=<?php echo $cod;?>" >Cerrar Sesion</a></li>
	 </ul>
  </li>  </td>
	   
  <td width="65">
	   <li><strong>Inicio</strong>	     
         <ul id="nav">
           <li> <a href="DatosPersonales2.php">Administracion</a></li>
           <li> <a href="">Crear Usuario</a></li>
              <li> <a href="">Eliminar Usuario</a></li>
                 <li> <a href="">Crear Evento</a></li>
                    <li> <a href="">Elimnar Evento</a></li>
               
           <li> <a href="Aula.php">Clases OnLine</a></li>
         </ul>
	   </li>  </td>	 
  </tr>
  </table>
</ul>  
 
</div>
  
  
<div id="Cuerpo" class="Cuerpo">
</div>
 
 
<!--class="Contactos content mCustomScrollbar" data-mcs-theme="minimal-dark"-->
 
<div id="Contactos" class="Contactos" >
</div>	
	
		
</body>
</html>