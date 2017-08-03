<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agenda Universitaria</title>

<link rel="stylesheet" type="text/css" href="DataTables/jquery.dataTables.css"/>
<script type="text/javascript" language="javascript" src="DataTables/jquery.js"></script>
<script type="text/javascript" language="javascript" src="DataTables/jquery.dataTables.js"></script>
<div id="Cabeza">
  <img src="Imagenes/mi_umsa.jpg" title="Tu Agenda Universitaria" width="218" height="71" style="float:left; margin-left:40px; margin-top: 5px;"/>
</div>
<div id="Logo">
  <marquee><img src="Imagenes/Agenda.jpg" width="315" height="71" style="float:left; margin-left:40px; margin-top: 5px;"/></marquee>
</div>

<div id="Antes">

</div>

<div id="Menu1">


  <ul id="Menu">
    <li><a href="inicio.php">Cerrar Cesion</a></li> 
      <li> <a href="evenA.php">Eventos Acad&eacutemicos</a></li>
      <li> <a href="evenS.php">Eventos sociales</a></li>
        <li> <a href="feria.php">Feria Muldidisciplinaria</a></li> 
      <li> <a href="Nuevo.php">Configuracion Ev.Academico</a></li>
      <li> <a href="ConfigSocial.php">Configuracion Ev.Social</a></li>
      <li> <a href="ConfigFeria.php">Configuracion Feria</a></li>
           
         
  </ul>

</div>
<br></br>
<br></br>
<br></br>
<br></br>
<script>
$ (document).ready(
function() 
{
$('table.sortable tbody tr:odd').addClass('odd');
$('table.sortable tbody tr:even').addClass('even');
}
);
</script>

<script>
$(document).ready(function() {
    $('#example').dataTable( {
        "language": {         	
	"processing": "Bitte warten...",
	"lengthMenu": "Mostrar _MENU_ Registros Eventos Academicos",
	"zeroRecords": "Base de Datos Vacia",
	"info": "Showing page _PAGE_ of _PAGES_",
	"infoEmpty": "No records available",
	"infoFiltered": "(filtered from _MAX_ total records)",
	"infoPostFix": "",
	"search": "Buscar",
	"url": "",
	"paginate": {
		"first":    "Erster",
		"previous": "Anterior",
		"next":     "Siguiente",
		"last":     "Letzter"
				}			
        }
    } );
} );
</script>

<script>
$(document).ready(function() {
    var table = $('#example').DataTable();
 
    $('#example tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
 
    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    } );
} );
</script>




<style type="text/css">
<!--
.Estilo1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.Estilo4 {font-size: 12px}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Estilo5 {color: #000000}
.Estilo6 {color: #0000FF}
-->
.centro{

margin:5px auto;
}
</style>
</head>

<body>



<?php
include("Conexion.php");
/* isset($_POST['B']); */
	
?>


<div align="center" class="centro" style="width:800px;">
  <table width="426" height="129" border="0" cellpadding="3" cellspacing="4" id="example" class="display compact">
  <thead>
    <tr >
       <td width="100" height="25"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Codigo Evento</span></td>
	  <td width="107" height="25"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Nombre</span></td>
      <td width="70"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Fecha</span></td>
      <td width="130"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Descripcion</span></td>
      <td width="130"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Titulo</span></td>
      <td width="130"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Tematica</span></td>	  
      <td width="130"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Ubicacion</span></td>
      <td width="130"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Direcion</span></td>
      <td width="130"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Material</span></td>
      <td width="130"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Hora Inicio</span></td>
      <td width="130"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Hora Fin</span></td>     
      <td width="280"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Eliminar</span></td>
    </tr>
  </thead>
  <tfoot>
    
  </tfoot>
 
 
 <?php 
  
  
  $sql=$cn->prepare("SELECT * FROM evento_academico");
  $sql->execute();


  
  
  while($op=$sql->fetch())	 	
   { ?>
    <tr bgcolor="#D7D7D7">
      <td height="63" class="Estilo26"><span class="Estilo33 Estilo1 Estilo4"><?php echo $op['CodeventoA'];?></span></td>
	   <td class="Estilo26"><span class="Estilo33 Estilo1 Estilo4"><?php echo $op['nombre'];?></span></td>
      <td class="Estilo26"><span class="Estilo33 Estilo1 Estilo4"><?php echo $op['fecha'];?></span></td>	  
      <td class="Estilo26"><span class="Estilo33 Estilo1 Estilo4"><?php echo $op['descripcion'];?></span></td>
      <td class="Estilo26"><span class="Estilo33 Estilo1 Estilo4"><?php echo $op['titulo'];?></span></td>
      <td class="Estilo26"><span class="Estilo33 Estilo1 Estilo4"><?php echo $op['tematica'];?></span></td>
	  <td class="Estilo26"><span class="Estilo33 Estilo1 Estilo4"><?php echo $op['ubicacion'];?></span></td>
      <td class="Estilo26"><span class="Estilo33 Estilo1 Estilo4"><?php echo $op['direccion'];?></span></td>
      <td class="Estilo26"><span class="Estilo33 Estilo1 Estilo4"><?php echo $op['material'];?></span></td>
      <td class="Estilo26"><span class="Estilo33 Estilo1 Estilo4"><?php echo $op['horaini'];?></span></td>
      <td class="Estilo26"><span class="Estilo33 Estilo1 Estilo4"><?php echo $op['horafin'];?></span></td>
      
      <td class="Estilo34 Estilo1 Estilo4">
	  
	  <a href="EliminarEventoA.php?id=<?php echo $op['CodeventoA'];?>"><img src="Imagenes/basura-icono-3648-48.png" width="26" height="25" /></a>	  </td>
    </tr>  
    <?php  }  ?>
  </table>
</div>


</body>
</html>
